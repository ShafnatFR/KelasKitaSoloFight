<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt($request->only('email', 'password'))){
            if(Auth::user()->role === 'admin'){
                return redirect()->route('admin.dashboardAdmin');
            } else {
                return redirect()->route('dashboard');
            }
        }
    }
}
