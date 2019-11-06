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
}
