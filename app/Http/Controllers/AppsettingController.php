<?php

namespace App\Http\Controllers;

use App\Models\Appsetting;
use Illuminate\Http\Request;

class AppsettingController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $appSettings = Appsetting::get();

        return view('appsetting.form', compact('appSettings'));
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            foreach ($request->all() as $key => $value) {
                Appsetting::set($key, $value);
            }
            request()->session()->flash('success', 'Appsetting updated successfully');
            return redirect()->route('appsetting.index');

    }
}
