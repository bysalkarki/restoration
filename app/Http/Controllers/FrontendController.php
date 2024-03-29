<?php

namespace App\Http\Controllers;

use App\Models\Appsetting;
use App\Models\Blog;
use App\Models\Counter;
use App\Models\Extra;
use App\Models\Menu;
use App\Models\Partners;
use App\Models\Popup;
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
            'director' => $this->getDirectorWords(),
            'counters' => $this->getCounters(),
            'progress' => $this->getProgress(),
            'progressCounter' => $this->getProgressCounter(),
            'popups' => $this->getPopups(),
        ];
        return view('front.index', $data);
    }

    private static function getSliders()
    {
        return Slider::published()->get();
    }

    private function getAbout()
    {
        return Menu::where('type', 'ABOUT')->first();
    }

    private function getPartners()
    {
        return Partners::published()->get();
    }

    private function getTestimonial()
    {
        return Testimonial::published()->latest()->get();
    }

    private function getBlog()
    {
        return Blog::published()->latest()->limit(4)->get();
    }

    private function getNotice()
    {
        return Blog::published()->latest()->limit(4)->get();
    }

    private function getFeatures()
    {
        return Extra::published()->latest()->limit(4)->get();
    }

    private function getFeatureVideo()
    {
        return Video::where('isFeatured', true)->published()->latest()->first();
    }

    private function getDirectorWords()
    {
        return Appsetting::where('group', 'messageFromDirector')->get();
    }

    private function getCounters()
    {
        return Counter::where('type', 'counter')->published()->get();
    }

    private function getProgress()
    {
        return Appsetting::where('group', 'progress')->get();
    }

    private function getProgressCounter()
    {
        return Counter::where('type', 'progress')->published()->get();
    }

    private function getPopups()
    {
        return Popup::latest()->published()->first();
    }
}
