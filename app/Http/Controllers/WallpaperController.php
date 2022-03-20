<?php

namespace App\Http\Controllers;

use App\Models\Wallpaper;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class WallpaperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('wallpapers.wallpapers', [
            'wallpapers' => Wallpaper::all(),
        ]);
    }

    //dashboard view
    public function dashboard()
    {
        return view('wallpapers.wallpapersDashboard', [
            'wallpapers' => Wallpaper::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('wallpapers.create-wallpaper');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $wallpaper = new Wallpaper;

        $wallpaper->name = $request->name;
        $wallpaper->type = $request->type;
        $wallpaper->texture = $request->texture;
        $wallpaper->color = $request->color;
        $wallpaper->basis = $request->basis;
        $wallpaper->price = $request->price;
        $wallpaper->description = $request->description;
        $wallpaper->is_3d = !empty($request->is_3d) ? 1 : 0;

        $uploadFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
            'folder' => 'products',
        ])->getSecurePath();
        $wallpaper->image = $uploadFileUrl;

        $wallpaper->save();

        return redirect('/dashboard/wallpapers');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wallpaper  $wallpaper
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(Wallpaper $wallpaper)
    {
        return view('wallpapers.wallpaper', [
            'wallpaper' => $wallpaper
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wallpaper  $wallpaper
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function edit(Wallpaper $wallpaper)
    {
        return view('wallpapers.edit-wallpaper', [
            'wallpaper' => $wallpaper,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wallpaper  $wallpaper
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Wallpaper $wallpaper)
    {
        $oldImage = $wallpaper->image;

        $wallpaper->name = $request->name;
        $wallpaper->type = $request->type;
        $wallpaper->texture = $request->texture;
        $wallpaper->color = $request->color;
        $wallpaper->basis = $request->basis;
        $wallpaper->price = $request->price;
        $wallpaper->description = $request->description;
        $wallpaper->is_3d = !empty($request->is_3d) ? 1 : 0;

        if ($request->file('image')) {
            $uploadFileUrl = Cloudinary::upload($request->file('image')->getRealPath(), [
                'folder' => 'products',
            ])->getSecurePath();
            $wallpaper->image = $uploadFileUrl;
        } else {
            $wallpaper->image = $oldImage;
        }

        $wallpaper->save();

        return redirect('/dashboard/wallpapers');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wallpaper  $wallpaper
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function destroy(Wallpaper $wallpaper)
    {
        $wallpaper->delete();
        return redirect('/dashboard/wallpapers');
    }
}