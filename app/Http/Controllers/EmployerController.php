<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployerController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:employer', 'verified']);
    }

    public function employer()
    {
        return view('employer.index');
    }

    //show the employer profile
    public function profile()
    {
    	return view('employer.my-profile');
    }
}
