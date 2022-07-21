<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
     
    public function login(Request $request)
    {
        //validates request
        $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required',
        ]);

        //authenticate user
        if (Auth::attempt($request->only('email', 'password'))) {
            //redirect if successfull
            return redirect()->intended('dashboard')->withSuccess('You have Successfully loggedin');
        }

        //redirect if not successfull
        return redirect("login")->withSuccess('Oppes! You have entered invalid credentials');

    
    }
}
