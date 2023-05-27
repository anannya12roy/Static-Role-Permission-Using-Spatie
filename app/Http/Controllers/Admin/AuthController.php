<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;

Use Session;

class AuthController extends Controller
{
    public function login(){

        return view('admin.login');
    }

    // public function check(Request $request){
    //     $email=$request->email;
    //     $password=$request->password;
    //     $result=User::where('email',$email)->where('password',$password)->first();
    //     // dd($result->getRoleNames());
    //     if($result){

    //         // Session::put('id', $result->id);
    //         Session::put('name', $result->name);
           
    //         return redirect('/dashboard');

    //     }
    //     else{
    //         // Session::put('message', 'Invalid info');
    //         return "wrong";
    //         // return redirect('/admin-login');
    //         // return Redirect::to('/adminlogin');
    //     }


    //     // return redirect('/dashboard');

    // }

    public function check(Request $request){

        $credentials = [
            'email' => $request['email'],
            'password' => $request['password'],
        ];
// dd($credentials);
        if(Auth::attempt($credentials)) {
            $user = Auth::user();
           
            return redirect('/dashboard');
        }

        return 'Failure'; 
    }
}
