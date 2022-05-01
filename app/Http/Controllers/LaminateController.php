<?php

namespace App\Http\Controllers;

use App\Models\Laminate;
use Illuminate\Http\Request;

class LaminateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('laminate.laminates', [
            'laminate' => Laminate::all(),
        ]);
    }

    public function dashboard()
    {
        return view('laminate.laminateDashboard', [
            'laminate' => Laminate::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('laminate.create-laminate');
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
            'width' => 'required|min:1|numeric',
            'height' => 'required|min:1|numeric',
            'length' => 'required|min:1|numeric',
            'loadClass' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'lockClass' => 'required|max:200|string',
            'corkLayer' => 'required|max:200|string',
            'abrasionResistanceClass' => 'required|max:200|string',
            'image' => 'required|max:2048|image'
        ]);

        $laminate = new Laminate;

        $laminate->name = $request->name;
        $laminate->description = $request->description;
        $laminate->price = $request->price;
        $laminate->color = $request->color;
        $laminate->abrasionResistanceClass = $request->abrasionResistanceClass;
        $laminate->loadClass = $request->loadClass;
        $laminate->lockClass = $request->lockClass;
        $laminate->width = $request->width;
        $laminate->length = $request->length;
        $laminate->height = $request->height;
        $laminate->vShape = !empty($request->vShape) ? 1 : 0;
        $laminate->corkLayer = !empty($request->corkLayer) ? 1 : 0;
        $laminate->image = $this->uploadImage($request);

        $laminate->save();

        return redirect('/dashboard/laminate');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laminate  $laminate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Laminate $laminate)
    {
        return view('laminate.laminate', [
            'laminate' => $laminate,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laminate  $laminate
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Laminate $laminate)
    {
        return view('laminate.edit-laminate', [
            'laminate' => $laminate,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laminate  $laminate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laminate $laminate)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'width' => 'required|min:1|numeric',
            'height' => 'required|min:1|numeric',
            'length' => 'required|min:1|numeric',
            'loadClass' => 'required|max:200|string',
            'color' => 'required|max:200|string',
            'lockClass' => 'required|max:200|string',
            'corkLayer' => 'required|max:200|string',
            'abrasionResistanceClass' => 'required|max:200|string',
            'image' => 'max:2048|image'
        ]);

        $laminate->name = $request->name;
        $laminate->description = $request->description;
        $laminate->price = $request->price;
        $laminate->color = $request->color;
        $laminate->abrasionResistanceClass = $request->abrasionResistanceClass;
        $laminate->loadClass = $request->loadClass;
        $laminate->lockClass = $request->lockClass;
        $laminate->width = $request->width;
        $laminate->length = $request->length;
        $laminate->height = $request->height;
        $laminate->vShape = !empty($request->vShape) ? 1 : 0;
        $laminate->corkLayer = !empty($request->corkLayer) ? 1 : 0;

        if (!empty($request->image)) {
            $laminate->image = $this->uploadImage($request);
        }

        $laminate->save();

        return redirect('/dashboard/laminate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laminate  $laminate
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Laminate $laminate)
    {
        $laminate->delete();

        return redirect('/dashboard/laminate');
    }
}
