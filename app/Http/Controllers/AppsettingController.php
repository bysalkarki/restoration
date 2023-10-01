<?php

namespace App\Http\Controllers;

use App\Models\Appsetting;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AppsettingController extends Controller
{
    /**
     * @param Request $request
     * @return Response
     */
    public function index(Request $request, string $type)
    {
        $appSettings = Appsetting::where('group', $type)->get();

        return view('appsetting.form', compact('appSettings'));
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function store(Request $request, string $type = "settings")
    {
        foreach ($request->all() as $key => $value) {
            Appsetting::set($key, $type, $value);
        }
        request()->session()->flash('success', 'Appsetting updated successfully');
        return redirect()->back();

    }
}
