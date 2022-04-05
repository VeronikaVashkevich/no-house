<?php

namespace App\Http\Controllers;

use App\Models\Paint;
use Illuminate\Http\Request;

class PaintController extends Controller
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
        return view('paint.paintDashboard', [
            'paints' => Paint::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('paint.create-paint');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $paint = new Paint;

        $paint->name = $request->name;
        $paint->description = $request->description;
        $paint->price = $request->price;
        $paint->type = $request->type;
        $paint->color = $request->color;
        $paint->appointment = $request->appointment;
        $paint->material = $request->material;
        $paint->time = $request->time;
        $paint->weight = $request->weight;
        $paint->image = $this->uploadImage($request);

        $paint->save();

        return redirect('/dashboard/paint');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Http\Response
     */
    public function show(Paint $paint)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Http\Response
     */
    public function edit(Paint $paint)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paint $paint)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paint $paint)
    {
        //
    }
}
