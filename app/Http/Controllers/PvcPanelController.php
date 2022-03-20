<?php

namespace App\Http\Controllers;

use App\Models\PvcPanel;
use Illuminate\Http\Request;

class PvcPanelController extends Controller
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

    public function dashboard()
    {
        return view('pvcPanels.pvcPanelsDashboard', [
            'pvcPanels' => PvcPanel::all(),
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
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Http\Response
     */
    public function show(PvcPanel $pvcPanel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Http\Response
     */
    public function edit(PvcPanel $pvcPanel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PvcPanel $pvcPanel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Http\Response
     */
    public function destroy(PvcPanel $pvcPanel)
    {
        //
    }
}
