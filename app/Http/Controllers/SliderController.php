<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderStoreRequest;
use App\Http\Requests\SliderUpdateRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $sliders = Slider::get();

        return view('slider.index', compact('sliders'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $slider = new Slider();
        return view('slider.form', compact('slider'));
    }

    /**
     * @param \App\Http\Requests\SliderStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(SliderStoreRequest $request)
    {
        try {
            $slider = Slider::create($request->validated());

            $request->session()->flash('success', 'slider created successfully');

            return redirect()->route('slider.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Slider $slider)
    {
        return view('slider.show', compact('slider'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Slider $slider)
    {
        return view('slider.form', compact('slider'));
    }

    /**
     * @param \App\Http\Requests\SliderUpdateRequest $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function update(SliderUpdateRequest $request, Slider $slider)
    {
        try {
            $slider->update($request->validated());
            $request->session()->flash('success', 'slider created successfully');
            return redirect()->route('slider.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Slider $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Slider $slider)
    {
        $slider->delete();
        return redirect()->route('slider.index');
    }
}
