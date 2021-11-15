<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryStoreRequest;
use App\Http\Requests\GalleryUpdateRequest;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class GalleryController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $galleries = Gallery::when($request->keyword, fn ($query) => $query->where('name', 'like', "%$request->keyword%"))
            ->latest()
            ->paginate(10);

        return view('gallery.index', compact('galleries'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $gallery = new Gallery();
        $categories = $this->category();
        $selectedCategories = [];
        return view('gallery.form', compact('gallery', 'categories', 'selectedCategories'));
    }

    /**
     * @param \App\Http\Requests\GalleryStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(GalleryStoreRequest $request)
    {
        DB::beginTransaction();
        try {
            $data = $request->validated();
            foreach ($data['image'] as $key => $value) {
                $gallery =   Gallery::create([
                    'title' => $data['title'],
                    'image' => $value,
                    'publishStatus' => $data['publishStatus'],
                ]);

                $gallery->category()->sync($data['category']);
            }

            $request->session()->flash('success', 'gallery added successfully');
            DB::commit();
            return redirect()->route('gallery.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            DB::rollBack();
            return redirect()->back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Gallery $gallery)
    {
        return view('gallery.show', compact('gallery'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Gallery $gallery)
    {
        $categories = $this->category();
        $selectedCategories = $gallery->category()->pluck('id');
        return view('gallery.form', compact('gallery', 'categories', 'selectedCategories'));
    }

    /**
     * @param \App\Http\Requests\GalleryUpdateRequest $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function update(GalleryUpdateRequest $request, Gallery $gallery)
    {
        $gallery->update($request->validated());

        $request->session()->flash('success', 'gallery added successfully');

        return redirect()->route('gallery.index');
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Gallery $gallery
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Gallery $gallery)
    {
        $gallery->delete();

        return redirect()->route('gallery.index');
    }

    public function category()
    {
        return Category::Where('type', 'gallery')->get()->mapWithKeys(fn ($item, $key) => [$item->id => $item->title]);
    }
}
