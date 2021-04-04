<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\PackageOption;
use App\Models\Transaction;
use App\Models\UserSubscription;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Stripe\Stripe;
use Stripe\Token;
use Stripe\Customer;
use Stripe\Charge;
use Stripe\Exception;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        Stripe::setApiKey(env('STRIPE_SECRET'));

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home.index');
    }
    public function sales()
    {
        return view('home.sales');
    }
    public function about_us()
    {
        return view('home.about_us');
    }
    public function payment(Request $request)
    {
//        dd($request->all());
        $data['package'] = Package::find($request->package_id);
        if ($request->is_session == 1){
            $data['price'] = $data['package']->per_day_price * $data['package']->is_session_count;
            $data['type'] = 'session';
        }else{
            $data['price'] = $request->total_price;
            $data['option'] = PackageOption::find($request->option_id);
            $data['type'] = $request->type;

        }
        return view('home.payment',compact('data'));
    }
    public function charge(Request $request)
    {
//        dd($request->all());
        $user = Auth::user();
        if (!$user) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->createAsStripeCustomer();
            $user->save();
        }
        $num = 0;
        $data['package'] = Package::find($request->package_id);
        if ($data['package']->name){
            $num = PackageOption::where('id',$request->option_id)->first();
//            dd((int)$data['package']->days_per_week * 4);
            if ($request->type == 'monthly') {
                $cal = (int)$data['package']->days_per_week * 4 ;
                $count = $cal * (int)$num->number;
                }else{
//                dd($num);
                $count = (int)$data['package']->days_per_week * 1 * (int)$num->number;
            }
        }else{
            $count = $data['package']->is_session_count;
        }
        $price = $request->total_amount;
        $stripeToken = $request->stripeToken;
        $expiry_date = Carbon::now()->addMonth();
//            dd((int)$price);

        try {
            $charge = Charge::create([
                "amount" => (int)$price * 100,
                "currency" => "usd",
                "source" => $stripeToken, // obtained with Stripe.js
//                "description" => "Charge for.' '.$request->plan_selected"
            ]);

            UserSubscription::create([
               'user_id'=>$user->id,
               'package_id' => $data['package']->id,
               'option_id' => isset($request->option_id)?$request->option_id:null,
               'expiry_date' => isset($data['package']->name)?$expiry_date:null,
                'class_count' => $num,
                'session_count' => $count,
                'price'=>$price
            ]);

            Transaction::create([
                'user_id'=>$user->id,
                'package_id' => $data['package']->id,
                'price'=>$price
            ]);

            return redirect('/');

        } catch(\Stripe\Error\Card $e) {
            // Since it's a decline, \Stripe\Error\Card will be caught
            $body = $e->getJsonBody();
            $err  = $body['error'];

            print('Status is:' . $e->getHttpStatus() . "\n");
            print('Type is:' . $err['type'] . "\n");
            print('Code is:' . $err['code'] . "\n");

            // param is '' in this case
            print('Param is:' . $err['param'] . "\n");
            print('Message is:' . $err['message'] . "\n");
        } catch (\Stripe\Error\InvalidRequest $e) {
            // Invalid parameters were supplied to Stripe's API
        } catch (\Stripe\Error\Authentication $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
        } catch (\Stripe\Error\ApiConnection $e) {
            // Network communication with Stripe failed
        } catch (\Stripe\Error\Base $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
        }
    }
    public function membership()
    {
        $membership = Package::with('options')->whereNull('is_session_count')->get();
        $session = Package::whereNotNull('is_session_count')->get();
        return view('home.membership',compact('membership','session'));
    } public function discount_membership()
{
    $membership = Package::with('options')->whereNull('is_session_count')->get();
    $session = Package::whereNotNull('is_session_count')->get();

    return view('home.membership_discount',compact('membership','session'));
}
}
