<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Job;
use App\State;
use App\Country;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth:employer', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(); 
        $projects = Job::where('user_id', auth()->id())->get();

        return view('employer.projects', compact('projects', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $categories = Category::all(); 
        $cities = State::all();
        $countries = Country::all();

        return view('employer.newproject', compact('categories', 'cities', 'countries'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $attributes = request()->validate([
            'category_id' => 'required',
            'country_id' => 'required',
            'city_id' => 'required',
            'title' => ['required', 'min:3'],
            'description' => ['required','min:60'],
            'level_required' => 'required',
            'quotes_until' => 'required',
            'duration' => 'nullable',
            'cost_range' => 'nullable',
            'hours' => 'nullable',
            'minimum' => 'nullable',
            'maximum' => 'nullable',
        ]);

        Job::create($attributes + ['user_id' => auth()->id()]);

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
