<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Slider;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'sliders' => self::getSliders(),
            'about' => $this->getAbout(),
        ];
        return view('front.index', $data);
    }

    private static function getSliders()
    {
        return Slider::Where('publishStatus', true)->get();
    }

    private function getAbout()
    {
        return Menu::where('type', 'ABOUT')->first();
    }
}
