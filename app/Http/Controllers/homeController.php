<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class homeController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        session(['user_id' => $user->id, 'user_name' => $user->name]);

        if ($user->usertype == 'user') {
            return redirect()->route('user_index');
        } else {
            return redirect()->route('dashboard_index');
        }
    }
}
