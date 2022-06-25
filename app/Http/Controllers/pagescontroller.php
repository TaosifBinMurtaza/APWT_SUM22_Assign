<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class pagescontroller extends Controller
{
    public function welcome(){
        return view('users.home');
    }
    public function login(){
        return view('users.login');
    }
    public function register(){
        return view('users.registration');
    }


    public function logincheck(Request $req){
        $user = UserInfo::where('name',$req->uname)
        ->where('password',$req->password)
        ->where('type','User')
        ->first();
       if($user){
         return redirect()->route('users.userdashboard');     
       }

       $admin = UserInfo::where('name',$req->uname)
        ->where('password',$req->password)
        ->where('type','Admin')
        ->first();
       if($admin){
         return redirect()->route('admin.userdashboard');     
       }

    }
    public function dashboard(){
        $users = UserInfo::where('Type','User')->get(); 
        return view('users.userdashboard')->with('user',$users);
    }

    public function user_details($id){

        $users = UserInfo::where('id',$id)->first(); 
        return view('users.details')->with('user',$users);

    }

    public function admin_dashboard(){

        return view('Admin.admin');

    }

    public function account_details(){
    
        return view('users.accountdetails');
    }
}