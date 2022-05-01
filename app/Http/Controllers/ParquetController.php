<?php

namespace App\Http\Controllers;

use App\Models\Parquet;
use Illuminate\Http\Request;

class ParquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('parquet.parquetes', [
            'parquet' => Parquet::all(),
        ]);
    }

    public function dashboard()
    {
        return view('parquet.parquetDashboard', [
            'parquet' => Parquet::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('parquet.create-parquet');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'width' => 'required|min:1|numeric',
            'length' => 'required|min:1|numeric',
            'thickness' => 'required|min:1|numeric',
            'color' => 'required|max:200|string',
            'covering' => 'required|max:200|string',
            'tree' => 'required|max:200|string',
            'type' => 'required|max:200|string',
            'image' => 'required|max:2048|image'
        ]);

        $parquet = new Parquet;

        $parquet->name = $request->name;
        $parquet->price = $request->price;
        $parquet->description = $request->description;
        $parquet->type = $request->type;
        $parquet->tree = $request->tree;
        $parquet->covering = $request->covering;
        $parquet->length = $request->length;
        $parquet->width = $request->width;
        $parquet->thickness = $request->thickness;
        $parquet->image = $this->uploadImage($request);

        $parquet->save();

        return redirect('/dashboard/parquet');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Parquet $parquet)
    {
        return view('parquet.parquet', [
            'parquet' => $parquet,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Parquet $parquet)
    {
        return view('parquet.edit-parquet', [
            'parquet' => $parquet,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Parquet $parquet)
    {
        $request->validate([
            'name' => 'required|max:400|string',
            'description' => 'required|max:2500|string',
            'price' => 'required|min:0.01|numeric',
            'width' => 'required|min:1|numeric',
            'length' => 'required|min:1|numeric',
            'thickness' => 'required|min:1|numeric',
            'color' => 'required|max:200|string',
            'covering' => 'required|max:200|string',
            'tree' => 'required|max:200|string',
            'type' => 'required|max:200|string',
            'image' => 'max:2048|image'
        ]);

        $parquet->name = $request->name;
        $parquet->price = $request->price;
        $parquet->description = $request->description;
        $parquet->type = $request->type;
        $parquet->tree = $request->tree;
        $parquet->covering = $request->covering;
        $parquet->length = $request->length;
        $parquet->width = $request->width;
        $parquet->thickness = $request->thickness;
        if (!empty($request->file('image'))) {
            $parquet->image = $this->uploadImage($request);
        }

        $parquet->save();

        return redirect('/dashboard/parquet');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Parquet $parquet)
    {
        $parquet->delete();

        return redirect('/dashboard/parquet');
    }
}
