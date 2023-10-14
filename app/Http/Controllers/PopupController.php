<?php

namespace App\Http\Controllers;

use App\Http\Requests\PopupRequest;
use App\Models\Popup;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class PopupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $popups = Popup::paginate();
        return view('popup.index', compact('popups'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $popup = new Popup();
        return view('popup.form', compact('popup'));
    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(PopupRequest $request): RedirectResponse
    {
         Popup::create($request->validated());

        $request->session()->flash('success', 'popup added successfully');

        return redirect()->route('popup.index');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param popup $popup
     * @return Response
     */
    public function edit(popup $popup)
    {
        return view('popup.form', compact('popup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param popup $popup
     * @return RedirectResponse
     */
    public function update(PopupRequest $request, popup $popup)
    {
        $popup->update($request->validated());

        $request->session()->flash('success', "updated successfully");

        return redirect()->route('popup.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param popup $popup
     * @return
     */
    public function destroy(popup $popup): RedirectResponse
    {
        $popup->delete();

        return redirect()->route('popup.index');
    }
}

