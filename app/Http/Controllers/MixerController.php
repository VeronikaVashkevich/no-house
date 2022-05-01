<?php

namespace App\Http\Controllers;

use App\Models\Mixer;
use Illuminate\Http\Request;

class MixerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('mixers.mixers', [
            'mixers' => Mixer::all(),
        ]);
    }

    public function dashboard() {
        return view('mixers.mixersDashboard', [
            'mixers' => Mixer::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('mixers.create-mixer');
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
            'material' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'mechanism' => 'required|max:200|string',
            'image' => 'required|max:2048|image'
        ]);

        $mixer = new Mixer;

        $mixer->name = $request->name;
        $mixer->purpose = $request->purpose;
        $mixer->description = $request->description;
        $mixer->price = $request->price;
        $mixer->color = $request->color;
        $mixer->material = $request->material;
        $mixer->mechanism = $request->mechanism;
        $mixer->image = $this->uploadImage($request);

        $mixer->save();

        return redirect('/dashboard/mixers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Mixer $mixer)
    {
        return view('mixers.mixer', [
            'mixer' => $mixer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Mixer $mixer)
    {
        return view('mixers.edit-mixer', [
            'mixer' => $mixer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Mixer $mixer)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'length' => 'required|min:1|numeric',
            'material' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'mechanism' => 'required|max:200|string',
            'image' => 'max:2048|image'
        ]);

        $mixer->name = $request->name;
        $mixer->purpose = $request->purpose;
        $mixer->description = $request->description;
        $mixer->price = $request->price;
        $mixer->color = $request->color;
        $mixer->material = $request->material;
        $mixer->mechanism = $request->mechanism;

        if($request->file('image')) {
            $mixer->image = $this->uploadImage($request);
        }

        $mixer->save();

        return redirect('/dashboard/mixers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mixer  $mixer
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Mixer $mixer)
    {
        $mixer->delete();
        return redirect('/dashboard/mixers');
    }
}
