<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function index()
    {
    	$details = About::where('id',  1)->first();
        return view('user.index', compact('details'));
    }
}
