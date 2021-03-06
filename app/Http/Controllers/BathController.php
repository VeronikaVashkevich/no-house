<?php

namespace App\Http\Controllers;

use App\Models\Bath;
use Illuminate\Http\Request;

class BathController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('baths.baths', [
            'baths' => Bath::all(),
        ]);
    }

    public function dashboard()
    {
        return view('baths.bathsDashboard', [
            'baths' => Bath::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('baths.create-bath');
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $bath = new Bath;

        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'maxLoad' => 'required|min:1|numeric',
            'width' => 'required|min:1|numeric',
            'height' => 'required|min:1|numeric',
            'depth' => 'required|min:1|numeric',
            'material' => 'required|max:100',
            'form' => 'required|max:400|string',
            'montageType' => 'required|max:400|string',
            'color' => 'required|max:400|string',
            'image' => 'required|max:2048|image'
        ]);

        $bath->name = $request->name;
        $bath->description = $request->description;
        $bath->price = $request->price;
        $bath->material = $request->material;
        $bath->form = $request->form;
        $bath->maxLoad = $request->maxLoad;
        $bath->montageType = $request->montageType;
        $bath->color = $request->color;
        $bath->width = $request->width;
        $bath->height = $request->height;
        $bath->depth = $request->depth;
        $bath->image = $this->uploadImage($request);

        $bath->save();

        return redirect('/dashboard/baths');
    }

    /**
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Bath $bath)
    {
        return view('baths.bath', [
            'bath' => $bath,
        ]);
    }

    /**
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Bath $bath)
    {
        return view('baths.edit-bath', [
            'bath' => $bath,
        ]);
    }

    /**
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bath $bath)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'maxLoad' => 'required|min:1|numeric',
            'width' => 'required|min:1|numeric',
            'height' => 'required|min:1|numeric',
            'depth' => 'required|min:1|numeric',
            'material' => 'required|max:100',
            'form' => 'required|max:400|string',
            'montageType' => 'required|max:400|string',
            'color' => 'required|max:400|string',
            'image' => 'max:2048|image'
        ]);

        $bath->name = $request->name;
        $bath->description = $request->description;
        $bath->price = $request->price;
        $bath->material = $request->material;
        $bath->form = $request->form;
        $bath->maxLoad = $request->maxLoad;
        $bath->montageType = $request->montageType;
        $bath->color = $request->color;
        $bath->width = $request->width;
        $bath->height = $request->height;
        $bath->depth = $request->depth;

        if($request->file('image')) {
            $bath->image = $this->uploadImage($request);
        }

        $bath->save();

        return redirect('/dashboard/baths');
    }

    /**
     * @param  \App\Models\Bath  $bath
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Bath $bath)
    {
        $bath->delete();

        return redirect('/dashboard/baths');
    }
}
