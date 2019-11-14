<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
        return view('admin.index');
    }

    public function employers()
    {
    	$employers = User::where('role', '=', 'employer')->get();
    	
    	return view('admin.employers', compact('employers'));
    }
}
