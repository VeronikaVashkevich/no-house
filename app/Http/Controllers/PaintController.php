<?php

namespace App\Http\Controllers;

use App\Models\Paint;
use Illuminate\Http\Request;

class PaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('paint.paints', [
            'paints' => Paint::all(),
        ]);
    }

    public function dashboard() {
        return view('paint.paintDashboard', [
            'paints' => Paint::all(),
        ]);
    }

    /**
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('paint.create-paint');
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $paint = new Paint;

        $paint->name = $request->name;
        $paint->description = $request->description;
        $paint->price = $request->price;
        $paint->type = $request->type;
        $paint->color = $request->color;
        $paint->appointment = $request->appointment;
        $paint->material = $request->material;
        $paint->time = $request->time;
        $paint->weight = $request->weight;
        $paint->image = $this->uploadImage($request);

        $paint->save();

        return redirect('/dashboard/paint');
    }

    /**
     *
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Paint $paint)
    {
        return view('paint.paint', [
            'paint' => $paint,
        ]);
    }

    /**
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Paint $paint)
    {
        return view('paint.edit-paint', [
            'paint' => $paint,
        ]);
    }

    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, Paint $paint)
    {
        $paint->name = $request->name;
        $paint->description = $request->description;
        $paint->price = $request->price;
        $paint->type = $request->type;
        $paint->color = $request->color;
        $paint->appointment = $request->appointment;
        $paint->material = $request->material;
        $paint->time = $request->time;
        $paint->weight = $request->weight;

        if (!empty($request->file('image'))) {
            $paint->image = $this->uploadImage($request);
        }

        $paint->save();

        return redirect('/dashboard/paint');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paint  $paint
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(Paint $paint)
    {
        $paint->delete();

        return redirect('/dashboard/paint');
    }
}
