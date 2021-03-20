<?php


/********************
 * Author:Asha chandran
 * Date:10/3/2021
 * Module:admin
 * function:Admin login
 **********************/

namespace App\Http\Controllers;
use  App\Models\AdminLogin;

use Illuminate\Http\Request;

class AdminLoginController extends Controller
{
    
     
     function check(Request $req)
    {

        
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $userinfo=AdminLogin::where('username','=',$req->username)->first();
        if(!$userinfo)
        {
            return back()->with('fail','Your username is not recognized!');
        }
        else{
            if(Hash::check($req->password,$userinfo->password))
            {
                $req->Session()->put('LoggedUser',$userinfo->id);
                return view('admn');
            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }
}