<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Extra;
use App\Models\Menu;
use App\Models\Partners;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(Request $request)
    {
        $data = [
            'sliders' => self::getSliders(),
            'features' => $this->getFeatures(),
            'about' => $this->getAbout(),
            'partners' => $this->getPartners(),
            'testimonials' => $this->getTestimonial(),
            'blogs' => $this->getBlog(),
            'notices' => $this->getNotice(),
            'featureVideo' => $this->getFeatureVideo(),
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

    private function getBlog()
    {
        return Blog::whereHas('categories', fn ($query) => $query->where('type', 'BLOG'))->latest()->limit(4)->get();
    }

    private function getNotice()
    {
        return Blog::whereHas('categories', fn ($query) => $query->where('type', 'NOTICE'))->latest()->limit(4)->get();
    }

    private function getFeatures()
    {
        return Extra::latest()->limit(3)->get();
    }

    private function getFeatureVideo(){
        return Video::where('isFeatured',true)->latest()->first();
    }
}
