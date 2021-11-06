<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartnerStoreRequest;
use App\Http\Requests\PartnerUpdateRequest;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnerController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $partners = Partners::get();

        return view('partner.index', compact('partners'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $partner = new Partners();
        return view('partner.form',compact('partner'));
    }

    /**
     * @param \App\Http\Requests\PartnerStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(PartnerStoreRequest $request)
    {
        $partner = Partners::create($request->validated());

        $request->session()->flash('partner.id', $partner->id);

        return redirect()->route('partner.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partners $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Partners $partner)
    {
        return view('partner.form', compact('partner'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partners $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Partners $partner)
    {
        return view('partner.form', compact('partner'));
    }

    /**
     * @param \App\Http\Requests\PartnerUpdateRequest $request
     * @param \App\Models\Partners $partner
     * @return \Illuminate\Http\Response
     */
    public function update(PartnerUpdateRequest $request, Partners $partner)
    {
        $partner->update($request->validated());

        $request->session()->flash('partner.id', $partner->id);

        return redirect()->route('partner.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Partners $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Partners $partner)
    {
        $partner->delete();

        return redirect()->route('partner.index');
    }
}
