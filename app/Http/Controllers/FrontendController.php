<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Partners;
use App\Models\Slider;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'sliders' => self::getSliders(),
            'about' => $this->getAbout(),
            'partners' => $this->getPartners(),
            'testimonials' => $this->getTestimonial()
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

    private function getPartners()
    {
        return Partners::get();
    }

    private function getTestimonial()
    {
        return Testimonial::latest()->get();
    }
}
