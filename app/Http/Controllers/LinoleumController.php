<?php

namespace App\Http\Controllers;

use App\Models\Linoleum;
use Illuminate\Http\Request;

class LinoleumController extends Controller
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('linoleum.linoleums', [
            'linoleum' => Linoleum::all(),
        ]);
    }

    public function dashboard() {
        return view('linoleum.linoleumDashboard', [
            'linoleum' => Linoleum::all(),
        ]);
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('linoleum.create-linoleum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'length' => 'required|min:1|numeric',
            'appointment' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'base' => 'required|max:200|string',
            'image' => 'required|max:2048|image'
        ]);

        $linoleum = new Linoleum;

        $linoleum->name = $request->name;
        $linoleum->description = $request->description;
        $linoleum->price = $request->price;
        $linoleum->color = $request->color;
        $linoleum->material = $request->material;
        $linoleum->base = $request->base;
        $linoleum->appointment = $request->appointment;
        $linoleum->length = $request->length;
        $linoleum->image = $this->uploadImage($request);

        $linoleum->save();

        return redirect('/dashboard/linoleum');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Linoleum  $linoleum
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Linoleum $linoleum)
    {
        return view('linoleum.linoleum', [
            'linoleum' => $linoleum,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Linoleum  $linoleum
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Linoleum $linoleum)
    {
        return view('linoleum.edit-linoleum', [
            'linoleum' => $linoleum,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Linoleum  $linoleum
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Linoleum $linoleum)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'length' => 'required|min:1|numeric',
            'appointment' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'base' => 'required|max:200|string',
            'image' => 'max:2048|image'
        ]);

        $linoleum->name = $request->name;
        $linoleum->description = $request->description;
        $linoleum->price = $request->price;
        $linoleum->color = $request->color;
        $linoleum->material = $request->material;
        $linoleum->base = $request->base;
        $linoleum->appointment = $request->appointment;
        $linoleum->length = $request->length;

        if (!empty($request->image)) {
            $linoleum->image = $this->uploadImage($request);
        }

        $linoleum->save();

        return redirect('/dashboard/linoleum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Linoleum  $linoleum
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Linoleum $linoleum)
    {
        $linoleum->delete();

        return redirect('/dashboard/linoleum');
    }
}
