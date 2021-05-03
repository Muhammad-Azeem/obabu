<?php
namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Models\user_interest;
use App\Models\userLanguage;
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
        if(Auth::user()->type == 4)
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

}
