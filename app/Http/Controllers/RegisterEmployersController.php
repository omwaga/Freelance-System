<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class RegisterEmployersController extends Controller
{


    public function registerform()
    {
        return view('auth.registeremployer');
    }

    public function registeremployer(Request $request)
    {
    	$attributes = request()->validate([
    	    'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
    	]);
    }
}
