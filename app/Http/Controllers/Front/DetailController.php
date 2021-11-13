<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Partners;
use App\Models\Team;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    public function blog()
    {
        return view('front.blog');
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function team()
    {
        $data = [
            'team' => Team::published()->orderBy('position')->get(),
            'client' => Partners::published()->get()
        ];
        return view('front.team', $data);
    }
}
