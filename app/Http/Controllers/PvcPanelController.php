<?php

namespace App\Http\Controllers;

use App\Models\PvcPanel;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;
use Illuminate\Http\Request;

class PvcPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        return view('pvcPanels.pvc-panels', [
            'pvcPanels' => PvcPanel::all(),
        ]);
    }

    public function dashboard()
    {
        return view('pvcPanels.pvcPanelsDashboard', [
            'pvcPanels' => PvcPanel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function create()
    {
        return view('pvcPanels.create-pvc-panel');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $pvcPanel = new PvcPanel;

        $pvcPanel->name = $request->name;
        $pvcPanel->type = $request->type;
        $pvcPanel->texture = $request->texture;
        $pvcPanel->color = $request->color;
        $pvcPanel->mounting = $request->mounting;
        $pvcPanel->price = $request->price;
        $pvcPanel->description = $request->description;
        $pvcPanel->image = $this->uploadImage($request);

        $pvcPanel->save();

        return redirect('dashboard/pvc-panels');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function show(PvcPanel $pvcPanel)
    {
        return view('pvcPanels.pvc-panel', [
            'pvcPanel' => $pvcPanel
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\PvcPanel $pvcPanel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(PvcPanel $pvcPanel)
    {
        return view('pvcPanels.edit-pvc-panel', [
            'pvcPanel' => $pvcPanel,
    ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PvcPanel $pvcPanel)
    {
        $pvcPanel->name = $request->name;
        $pvcPanel->type = $request->type;
        $pvcPanel->texture = $request->texture;
        $pvcPanel->color = $request->color;
        $pvcPanel->mounting = $request->mounting;
        $pvcPanel->price = $request->price;
        $pvcPanel->description = $request->description;

        if ($request->file('image')) {
            $pvcPanel->image = $this->uploadImage($request);
        }
        $pvcPanel->save();

        return redirect('/dashboard/pvc-panels');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PvcPanel  $pvcPanel
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy(PvcPanel $pvcPanel)
    {
        $pvcPanel->delete();
        return redirect('/dashboard/pvc-panels');
    }
}
