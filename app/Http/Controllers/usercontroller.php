<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInfo;

class usercontroller extends Controller
{
    public function userregistration(Request $req){
        $this->validate($req,
        [
            "name"=>"required|alpha",
            "email"=>"required",
            "password"=>"required|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@#$!%*?&])[A-Za-z\d@#$!%*?&]{8,}+$/|min:8",
            "confirm_password"=>"required|min:8|same:password"

        ],
    
        [
            "name.required"=>"Please provide your name",

        ]);

        $users = new UserInfo();
        $users->name = $req->name;
        $users->email =$req->email;
        $users->password = $req->password;
        $users->save();
        return redirect()->route('welcome');
    }
}