<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

use Illuminate\Http\Request;

class loginController extends Controller
{
    public function loginUser(Request $request){
        $inputEmail = $request->input('user_email');
        $inputPassword = $request->input('user_password');

            $users = DB::table('signup')
            ->select('user_email', 'user_password')
            ->get();

            foreach ($users as $user) {
                $email = $user->user_email;
                $password = $user->user_password;
              
                if ($email === $inputEmail && Hash::check($inputPassword, $password)) {
                    Log::info('Login success message set.');
                    return redirect()->route('home')->with('success', 'Login successfully!');
                }
            }
            Log::info('Login error message set.');
            return redirect()->back()->with('error', 'email or password in invalid!');
    }
}
