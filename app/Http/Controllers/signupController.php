<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SignupController extends Controller
{
    public function registerUser(Request $request)
    {
        $request->validate([
            'user_name' => 'required|string|max:255',
            'user_email' => 'required|email|max:255|unique:signup,user_email',
            'user_password' => [
                'required',
                'string',
                'min:6',
                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
                'confirmed',
            ],
        ]);

        DB::table('signup')->insert([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_password' => bcrypt($request->user_password),
        ]);

        return redirect()->route('login')->with('success', 'User registered successfully!');
    }
}
