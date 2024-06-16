<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:signup,user_email',
            'password' => [
                            'required',
                            'string',
                            'min:6',
                            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).*$/',
                            'confirmed'
                        ],
        ]);

        $user = DB::table('users')->insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        if($user){
            return redirect()->route('login');
        }
    }

    public function loginUser(Request $request)
    {
        $cridentials = $request->validate([
            'email' => 'required|email|',
            'password' => [
                            'required',
                            'string',
                            'min:6',
                        ],
        ]);

        if(Auth::attempt($cridentials)){
            return view('index');
        }
        else{
            return redirect()->route('login');
        }
    }
}
