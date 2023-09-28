<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCounterRequest;
use App\Http\Requests\UpdateCounterRequest;
use App\Models\Counter;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Request;

class CounterController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {

        $counters = Counter::all();

        return view('counter.index', compact('counters')); //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create(Request $request)
    {
        $counter = new Counter();
        return view('counter.form', compact('counter'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreCounterRequest $request
     * @return Response
     */
    public function store(StoreCounterRequest $request)
    {
        $counter = Counter::create($request->validated());

        $request->session()->flash('counter.id', $counter->id);

        return redirect()->route('counter.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Counter $counter
     * @return Response
     */
    public function show(Counter $counter)
    {
        return view('counter.show', compact('counter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Counter $counter
     * @return Response
     */
    public function edit(Counter $counter)
    {
        return view('counter.form', compact('counter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateCounterRequest $request
     * @param Counter $counter
     * @return Response
     */
    public function update(UpdateCounterRequest $request, Counter $counter)
    {
        $counter->update($request->validated());

        $request->session()->flash('counter.id', $counter->id);

        return redirect()->route('counter.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Counter $counter
     * @return Response
     */
    public function destroy(Counter $counter)
    {
        $counter->delete();

        return redirect()->route('counter.index');
    }
}
