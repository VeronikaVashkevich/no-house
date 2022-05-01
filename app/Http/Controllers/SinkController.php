<?php

namespace App\Http\Controllers;

use App\Models\Sink;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class SinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('sinks.sinks', [
            'sinks' => Sink::all(),
        ]);
    }

    public function dashboard()
    {
        return view('sinks.sinksDashboard', [
            'sinks' => Sink::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('sinks.create-sink');
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
            'bowls' => 'required|min:1|numeric',
            'material' => 'required|max:200|string',
            'form' => 'required|max:100|string',
            'montage' => 'required|max:200|string',
            'type' => 'required|max:400|string',
            'color' => 'required|max:200|string',
            'image' => 'required|max:2048|image'
        ]);

        $sink = new Sink;

        $sink->name = $request->name;
        $sink->type = $request->type;
        $sink->price = $request->price;
        $sink->description = $request->description;
        $sink->color = $request->color;
        $sink->form = $request->form;
        $sink->bowls = $request->bowls;
        $sink->material = $request->material;
        $sink->montage = $request->montage;
        $sink->wing = !empty($request->wing) ? 1 : 0;
        $sink->image = $this->uploadImage($request);

        $sink->save();

        return redirect('/dashboard/sinks');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sink  $sink
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Sink $sink)
    {
        return view('sinks.sink', [
            'sink' => $sink,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sink  $sink
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Sink $sink)
    {
        return view('sinks.edit-sink', [
            'sink' => $sink,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sink  $sink
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Sink $sink)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'bowls' => 'required|min:1|numeric',
            'material' => 'required|max:200|string',
            'form' => 'required|max:100|string',
            'montage' => 'required|max:200|string',
            'type' => 'required|max:400|string',
            'color' => 'required|max:200|string',
            'image' => 'max:2048|image'
        ]);

        $sink->name = $request->name;
        $sink->type = $request->type;
        $sink->price = $request->price;
        $sink->description = $request->description;
        $sink->color = $request->color;
        $sink->form = $request->form;
        $sink->bowls = $request->bowls;
        $sink->material = $request->material;
        $sink->montage = $request->montage;
        $sink->wing = !empty($request->wing) ? 1 : 0;
        if ($request->file('image')) {
            $sink->image = $this->uploadImage($request);
        }

        $sink->save();

        return redirect('/dashboard/sinks');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sink  $sink
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Sink $sink)
    {
        $sink->delete();
        return redirect('dashboard/sinks');
    }
}
