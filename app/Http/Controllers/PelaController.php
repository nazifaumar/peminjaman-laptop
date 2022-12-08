<?php

namespace App\Http\Controllers;

use App\Models\Pela;
use Illuminate\Http\Request;

class PelaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('index');
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
     * @param  \App\Models\Pela  $pela
     * @return \Illuminate\Http\Response
     */
    public function show(Pela $pela)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pela  $pela
     * @return \Illuminate\Http\Response
     */
    public function edit(Pela $pela)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pela  $pela
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pela $pela)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pela  $pela
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pela $pela)
    {
        //
    }

    public function form(){
        return view ('form');
    }
}
