<?php

namespace App\Http\Controllers;

use App\Models\calender;
use Illuminate\Http\Request;

class CalenderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('calender.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function show(calender $calender)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function edit(calender $calender)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, calender $calender)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\calender  $calender
     * @return \Illuminate\Http\Response
     */
    public function destroy(calender $calender)
    {
        //
    }
}
