<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
use App\Job;

class PagesController extends Controller
{
    public function index()
    {
    	$projects = Job::all();
    	$details = About::where('id',  1)->first();

        return view('index', compact('details', 'projects'));
    }
}
