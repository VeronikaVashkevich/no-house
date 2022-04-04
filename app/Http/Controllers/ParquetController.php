<?php

namespace App\Http\Controllers;

use App\Models\Parquet;
use Illuminate\Http\Request;

class ParquetController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function show(Parquet $parquet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Http\Response
     */
    public function edit(Parquet $parquet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Parquet $parquet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Parquet  $parquet
     * @return \Illuminate\Http\Response
     */
    public function destroy(Parquet $parquet)
    {
        //
    }
}
