<?php

namespace App\Http\Controllers;

use App\Http\Requests\ExtraStoreRequest;
use App\Http\Requests\ExtraUpdateRequest;
use App\Models\Extra;
use Illuminate\Http\Request;

class ExtraController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $extras = Extra::all();

        return view('extra.index', compact('extras'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('extra.create');
    }

    /**
     * @param \App\Http\Requests\ExtraStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(ExtraStoreRequest $request)
    {
        $extra = Extra::create($request->validated());

        $request->session()->flash('extra.id', $extra->id);

        return redirect()->route('extra.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Extra $extra
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Extra $extra)
    {
        return view('extra.show', compact('extra'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Extra $extra
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Extra $extra)
    {
        return view('extra.edit', compact('extra'));
    }

    /**
     * @param \App\Http\Requests\ExtraUpdateRequest $request
     * @param \App\Models\Extra $extra
     * @return \Illuminate\Http\Response
     */
    public function update(ExtraUpdateRequest $request, Extra $extra)
    {
        $extra->update($request->validated());

        $request->session()->flash('extra.id', $extra->id);

        return redirect()->route('extra.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Extra $extra
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Extra $extra)
    {
        $extra->delete();

        return redirect()->route('extra.index');
    }
}
