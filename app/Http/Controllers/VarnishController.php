<?php

namespace App\Http\Controllers;

use App\Models\Varnish;
use Illuminate\Http\Request;

class VarnishController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('varnishes.varnishes', [
            'varnishes' => Varnish::all(),
        ]);
    }

    public function dashboard()
    {
        return view('varnishes.varnishesDashboard', [
            'varnishes' => Varnish::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('varnishes.create-varnish');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $varnish = new Varnish;

        $varnish->name = $request->name;
        $varnish->price = $request->price;
        $varnish->description = $request->description;
        $varnish->appointment = $request->appointment;
        $varnish->basis = $request->basis;
        $varnish->color = $request->color;
        $varnish->weight = $request->weight;
        $varnish->time = $request->time;
        $varnish->material = $request->material;
        $varnish->image = $this->uploadImage($request);

        $varnish->save();

        return redirect('/dashboard/varnishes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Varnish  $varnish
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Varnish $varnish)
    {
        return view('varnishes.varnish', [
            'varnish' => $varnish,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Varnish  $varnish
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Varnish $varnish)
    {
        return view('varnishes.edit-varnish', [
            'varnish' => $varnish,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Varnish  $varnish
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Varnish $varnish)
    {
        $varnish->name = $request->name;
        $varnish->price = $request->price;
        $varnish->description = $request->description;
        $varnish->appointment = $request->appointment;
        $varnish->basis = $request->basis;
        $varnish->color = $request->color;
        $varnish->weight = $request->weight;
        $varnish->time = $request->time;
        $varnish->material = $request->material;

        if (!empty($request->file('image'))) {
            $varnish->image = $this->uploadImage($request);
        }

        $varnish->save();

        return redirect('/dashboard/varnishes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Varnish  $varnish
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Varnish $varnish)
    {
        $varnish->delete();

        return redirect('/dashboard/varnishes');
    }
}