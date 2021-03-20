<?php
/********************
 * Author:Athulya a
 * Date:9/3/2021
 * Module:user
 * function:User registration
 **********************/

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use  App\Models\Register;


class RegisterController extends Controller
{
    
    function user_register(Request $req)
    
 
    {

        $member=new Register;
        $member->firstname=$req->firstname;
        $member->lastname=$req->lastname;
        $member->age=$req->age;
        $member->gender=$req->gender;
        $member->address=$req->address;
        $member->phoneno=$req->phoneno;
        $member->email=$req->email;
        $member->password=Hash::make($req->password);
        $member->adhar=$req->adhar;
        $member->save();
       return view('user_reg');
    
    }
    function check(Request $req)
    {
        
        $req->validate([
            'email'=>'required',
            'password'=>'required'
        ]);
        $email=$req->input('email');
        $pass=$req->input('password');
        $userinfo=Register::where('email','=',$req->email)->first();
        if(!$userinfo)
        {
            return back()->with('fail','we cannot recognize email');
        }
        else
        {
            if(Hash::check($req->password,$userinfo->password))
            {
                
                    $req->session()->put('LoggedUser',$userinfo->id);
                    $data=['LoggedUserInfo'=>Register::where('id','=',session('LoggedUser'))->first()];
                    
                        if($email=='admin@gmail.com' && $pass='admin')
                        {
                            return redirect('admn');
                        }
                    else
                    {
                        return view('user',$data);
                    }
            }
            else
            {
                return back()->with('fail','invalid password');
            }
        }
    }
    
    
    function user_view()
    {
        
    
            $users=Register::all();
            
            return view('user_view',['user'=>$users]);
    
        

    }
    function userupdates($id)
    {
        $data=Register::find($id);
        return view('userupdate',['data'=>$data]);
        
    }
    function update_action(Request $req)
    {
        $Reg=Register::find($req->id);
        $Reg->firstname=$req->firstname;
        $Reg->lastname=$req->lastname;
        $Reg->age=$req->age;
        $Reg->address=$req->address;
        $Reg->phoneno=$req->phoneno;
        $Reg->email=$req->email;
        $Reg->password=$req->password;
        $Reg->adhar=$req->adhar;
        
        $query=$Reg->save();
        return redirect('user_view');
    
    }
     function payment_fet()
     {
         $value=Register::all();
         return view('payment',['value'=>$value]);
     }
        
}
