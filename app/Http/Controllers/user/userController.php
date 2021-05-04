<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user_interest;
use App\Models\userLanguage;
use App\Models\User;
use File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userController extends Controller{

    public function updateLanguage(Request $re)
    {

        if($re->id == "")
        {
            $userLang = userLanguage::create([
                'user_id'=>Auth::id(),
                'language'=>$re->language,
                'level'=>$re->level
            ]);
        }else{
            $userLang = userLanguage::find($re->id);
            $userLang->language = $re->language;
            $userLang->level    = $re->level;
            $userLang->save();
        }
        if(Auth::user()->type == 2)
        {
            return redirect('/teacher');
        }
        return redirect('/student');
    }
    public  function addInterest(Request $re)
    {
        if($re->hobby != "") {
            $interest = user_interest::create([
                'interest' => $re->hobby,
                'user_id' => Auth::id(),
                'type' => 'hobby'
            ]);
        }
        if($re->interest != "") {
            $hobby = user_interest::create([
                'interest' => $re->interest,
                'user_id' => Auth::id(),
                'type' => 'interest'
            ]);
        }
        if($re->teacher_check)
        {
            return redirect('/teacher');
        }
        return redirect('/student');
    }
public function updateProfile(Request $re)
{
    $user = User::find(Auth::user()->id);
    $path = public_path() . '/svg/';
    File::delete($path . $user->avatar);
    $image = $re->file('file');

    $filename = Auth::user()->name . '.' . $image->getClientOriginalExtension();

    $image->move($path, $filename);
    $user->profile_pic = $filename;
    $user->save();

    return "done";
}
}
