<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuStoreRequest;
use App\Http\Requests\MenuUpdateRequest;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $menus = Menu::when($request->keyword, fn ($query) => $query->where('title', 'like', "%$request->keyword%"))
            ->orderBy('position', 'ASC')
            ->paginate(10);

        return view('menu.index', compact('menus'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $menu = new Menu();
        return view('menu.form', compact('menu'));
    }

    /**
     * @param \App\Http\Requests\MenuStoreRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuStoreRequest $request)
    {
        try {
            $menu = Menu::create($request->validated());
            $request->session()->flash('success', 'Menu Added Successfully');
            return redirect()->route('menu.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, Menu $menu)
    {
        return view('menu.show', compact('menu'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, Menu $menu)
    {
        return view('menu.form', compact('menu'));
    }

    /**
     * @param \App\Http\Requests\MenuUpdateRequest $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuUpdateRequest $request, Menu $menu)
    {
        try {
            $menu->update($request->validated());
            $request->session()->flash('success', $menu->title . ' updated successfully');
            return redirect()->route('menu.index');
        } catch (\Throwable $th) {
            $request->session()->flash('error', $th->getMessage());
            return back()->withInput();
        }
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Menu $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Menu $menu)
    {
        $menu->delete();

        return redirect()->route('menu.index');
    }
}
