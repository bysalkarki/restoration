<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestimonialStoreRequest;
use App\Http\Requests\TestimonialUpdateRequest;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $testimonials = Testimonial::when($request->keyword, fn ($query) => $query->where('title', 'like', "%$request->keyword%")
            ->orWhere('name', 'like', "%$request->keyword%"))
            ->latest()
            ->paginate(10);

        return view('testimonial.index', compact('testimonials'));
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $testimonial = new Testimonial();
        return view('testimonial.form', compact('testimonial'));
    }

    /**
     * @param \App\Http\Requests\TestimonialStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStoreRequest $request)
    {
        try {
            $testimonial = Testimonial::create($request->validated());
            $request->session()->flash('success', 'testimonial created succesfully');
            return redirect()->route('testimonial.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return redirect()->route('testimonial.index');
        }
    }

    /**
     * @param Request $request
     * @param Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Testimonial $testimonial)
    {
        return view('testimonial.show', compact('testimonial'));
    }

    /**
     * @param Request $request
     * @param Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Testimonial $testimonial)
    {
        return view('testimonial.form', compact('testimonial'));
    }

    /**
     * @param \App\Http\Requests\TestimonialUpdateRequest $request
     * @param Testimonial $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdateRequest $request, Testimonial $testimonial)
    {
        try {
            $testimonial->update($request->validated());
            $request->session()->flash('success', 'testimonial updated successfully');
            return redirect()->route('testimonial.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', 'testimonial cannot be  updated ');
            return back()->withInput();
        }
    }

    /**
     * @param Request $request
     * @param Testimonial $testimonial
     */
    public function destroy(Request $request, Testimonial $testimonial)
    {
        $testimonial->delete();
        $request->session()->flash('error', 'testimonial deleted');
        return redirect()->route('testimonial.index');
    }
}
