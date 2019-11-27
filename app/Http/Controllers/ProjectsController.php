<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Category;
use App\Project;
use App\City;
use App\Country;

class ProjectsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all(); 
        $projects = Project :: where('user_id', auth()->id())->get();

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
        $cities = City::all();
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
            'city_id' => 'required',
            'title' => ['required', 'min:3'],
            'description' => 'required',
            'level_required' => 'required',
            'quotes_until' => 'required',
        ]);

        dd($attributes);

        // Project::create($attributes + ['user_id' => auth()->id()]);

        // return back();
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
