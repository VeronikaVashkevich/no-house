<?php

namespace App\Http\Controllers;

use App\Models\Mixer;
use Illuminate\Http\Request;

class MixerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function dashboard() {
        return view('mixers.mixersDashboard', [
            'mixers' => Mixer::all(),
        ]);
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
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\Response
     */
    public function show(Mixer $mixer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\Response
     */
    public function edit(Mixer $mixer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mixer $mixer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Mixer $mixer)
    {
        //
    }
}
