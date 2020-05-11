<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;
use App\Job;
use App\Category;

class PagesController extends Controller
{
    public function index()
    {
    	$projects = Job::all();
    	$details = About::where('id',  1)->first();
    	$categories = Category::all();

        return view('index', compact('details', 'projects', 'categories'));
    }
}
