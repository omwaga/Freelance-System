<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\About;

class AboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('admin.createprofile');
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
            'websitename' => ['required', 'min:3'],
            'email' => ['required', 'min:3'],
            'phone' => ['required', 'min:3'],
            'facebook' => ['required', 'min:3'],
            'instagram' => ['required', 'min:3'],
            'linkedin' => ['required', 'min:3'],
            'twitter' => ['required', 'min:3'],
            'banner1' => ['required', 'min:3'],
            'banner2' => ['required', 'min:3'],
            'bannerdetails1' => ['required', 'min:3'],
            'bannerdetails2' => ['required', 'min:3'],
            'aboutdescription' => ['required', 'min:60']
        ]);

        About::create($attributes);

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
        $profile = About::findOrFail(1);
        return view('admin.editprofile', compact('profile'));
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
        $details = About::findOrFail(1);

        $details->update(request([
            'websitename','email','phone','facebook','instagram','linkedin','twitter','banner1','banner2',
            'bannerdetails1','bannerdetails2','aboutdescription'
        ]));

        return back();
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
