<?php

namespace App\Http\Controllers;

use App\Models\Tiles;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class TilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('tiles.tiles', [
            'tiles' => Tiles::all(),
        ]);
    }

    public function dashboard()
    {
        return view('tiles.tilesDashboard', [
            'tiles' => Tiles::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('tiles.create-tile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $tile = new Tiles;

        $tile->name = $request->name;
        $tile->type = $request->type;
        $tile->price = $request->price;
        $tile->description = $request->description;
        $tile->color = $request->color;
        $tile->form = $request->form;
        $tile->wear_class = $request->wearClass;
        $tile->purpose = $request->purpose;
        $tile->width = $request->width;
        $tile->height = $request->height;
        $tile->depth = $request->depth;
        $tile->frost_resistance = !empty($request->frostResistance) ? 1 : 0;
        $tile->image = $this->uploadImage($request);

        $tile->save();

        return redirect('/dashboard/tiles');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tiles  $tiles
     * @return \Illuminate\Http\Response
     */
    public function show(Tiles $tiles)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tiles  $tile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Tiles $tile)
    {
        return view('tiles.edit-tile', [
            'tile' => $tile,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tiles  $tile
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Tiles $tile)
    {
        $tile->name = $request->name;
        $tile->type = $request->type;
        $tile->price = $request->price;
        $tile->description = $request->description;
        $tile->color = $request->color;
        $tile->form = $request->form;
        $tile->wear_class = $request->wearClass;
        $tile->purpose = $request->purpose;
        $tile->width = $request->width;
        $tile->height = $request->height;
        $tile->depth = $request->depth;
        $tile->frost_resistance = !empty($request->frostResistance) ? 1 : 0;

        if ($request->file('image')) {
            $uploadFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'products',
            ])->getSecurePath();
            $tile->image = $uploadFileUrl;
        }

        $tile->save();

        return redirect('/dashboard/tiles');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tiles  $tile
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Tiles $tile)
    {
        $tile->delete();
        return redirect('/dashboard/tiles');
    }
}
