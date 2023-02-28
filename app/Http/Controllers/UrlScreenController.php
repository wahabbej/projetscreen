<?php

namespace App\Http\Controllers;

use App\Models\UrlScreen;
use Illuminate\Http\Request;

class UrlScreenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $urlScreens = UrlScreen::all();
        return view("urlScreen.index",["urlScreens"=>$urlScreens]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            "name"=>'required',
        ]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UrlScreen  $urlScreen
     * @return \Illuminate\Http\Response
     */
    public function show(UrlScreen $urlScreen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UrlScreen  $urlScreen
     * @return \Illuminate\Http\Response
     */
    public function edit(UrlScreen $urlScreen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UrlScreen  $urlScreen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UrlScreen $urlScreen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UrlScreen  $urlScreen
     * @return \Illuminate\Http\Response
     */
    public function destroy(UrlScreen $urlScreen)
    {
        //
    }
}
