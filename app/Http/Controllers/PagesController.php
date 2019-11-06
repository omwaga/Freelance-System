<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class PagesController extends Controller
{
    public function index()
    {
    	$details = About::where('id',  1)->first();
        return view('index', compact('details'));
    }
}
