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

    // return the employer login form
    public function employerlogin()
    {
    	return view('auth.employer-login');
    }

    //display all freelancers
    public function freelancers()
    {
        return view('freelancers');
    }

    //select the registration type  by the user
    public function registrationtype()
    {
        return view('registration-type');
    }
}
