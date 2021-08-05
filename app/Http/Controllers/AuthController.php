<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AuthController extends Controller
{
    public function register(Request $request){
        if($request->method() == "POST"){
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);

            $register = new User();
            $register->name = $request->name;
            $register->email = $request->email;
            $register->password = Hash::make($request->password);
            $register->save();

            return redirect()->route('login');
        }

        return view('auth.register');
    }

    public function login(Request $request){
        if($request->method() == "POST"){
            $request->validate([
                'name'=>'required',
                'email'=>'required',
                'password'=>'required',
            ]);

            $check = User::where('email',$request->email)->count();
            if($check > 0){
                $check_password = User::where('password',Hash::check($request->password));
            }
            else{

            }

            return redirect()->back();
        }

        return view('auth.login');
    }
}
