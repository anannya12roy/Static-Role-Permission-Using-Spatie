<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Models\User;

use Session;
class UserController extends Controller
{
   // public $user;

    // public function __construct(){

    //     $this->middleware(function($request , $next){
    //         $this->user = Auth::guard('web')->user();
    //         return $next($request);
    //     });
    // }
    public function show(){

        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }

    public function store(Request $request){

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);


        if ($request->roles) {
            $user->assignRole($request->roles);
        }

        $user->save();

        return redirect()->back();
    }

    public function logout(){
        Session::flush();
        return redirect('/');
    }
}
