<?php

namespace App\Http\Controllers;

use App\Models\Door;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class DoorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param null $type
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index($type = null)
    {
        if (!empty($type)) {
            if ($type === 'glass') {
                return view('doors.doors', [
                    'doors' => Door::query()->where('glass', '=', 1)->get(),
                ]);
            } else {
                return view('doors.doors', [
                    'doors' => Door::query()->where('glass', '<>', 1)->get(),
                ]);
            }
        }

        return view('doors.doors', [
            'doors' => Door::all(),
        ]);
    }

    public function dashboard()
    {
        return view('doors.doorsDashboard', [
            'doors' => Door::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('doors.create-door');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $door = new Door;

        $door->name = $request->name;
        $door->type = $request->type;
        $door->doorTrim = $request->doorTrim;
        $door->color = $request->color;
        $door->construction = $request->construction;
        $door->price = $request->price;
        $door->height = $request->height;
        $door->width = $request->width;
        $door->description = $request->description;
        $door->glass = !empty($request->glass) ? 1 : 0;
        $door->image = $this->uploadImage($request);

        $door->save();

        return redirect('/dashboard/doors');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Door $door
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Door $door)
    {
        return view('doors.door', [
            'door' => $door,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Door $door
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Door $door)
    {
        return view('doors.edit-door', [
            'door' => $door
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Door $door
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Door $door)
    {
        $door->name = $request->name;
        $door->type = $request->type;
        $door->doorTrim = $request->doorTrim;
        $door->color = $request->color;
        $door->construction = $request->construction;
        $door->price = $request->price;
        $door->height = $request->height;
        $door->width = $request->width;
        $door->description = $request->description;
        $door->glass = !empty($request->glass) ? 1 : 0;

        if ($request->file('image')) {
            $door->image = $this->uploadImage($request);
        }

        $door->save();

        return redirect('/dashboard/doors');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Door $door
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Door $door)
    {
        $door->delete();
        return redirect('/dashboard/doors');
    }
}
