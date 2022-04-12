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
     * @param null $is_wet
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index($is_wet = null)
    {
        if (!empty($is_wet)) {
            return view('wallpapers.wallpapers', [
                'wallpapers' => Wallpaper::query()->where('is_wet', '=', 1)->get(),
            ]);
        }

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
        $wallpaper->is_wet = !empty($request->is_wet) ? 1 : 0;
        $wallpaper->image = $this->uploadImage($request);

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
        $wallpaper->name = $request->name;
        $wallpaper->type = $request->type;
        $wallpaper->texture = $request->texture;
        $wallpaper->color = $request->color;
        $wallpaper->basis = $request->basis;
        $wallpaper->price = $request->price;
        $wallpaper->description = $request->description;
        $wallpaper->is_3d = !empty($request->is_3d) ? 1 : 0;
        $wallpaper->is_wet = !empty($request->is_wet) ? 1 : 0;

        if ($request->file('image')) {
            $wallpaper->image = $this->uploadImage($request);
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
