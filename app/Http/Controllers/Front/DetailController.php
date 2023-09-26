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
        $data = [
            'blogs' => Blog::latest('publishAt')->published()->paginate(8),
        ];
        return view('front.blog', $data);
    }

    public function blogDetail($slug)
    {
        $blog =  Blog::published()->where('slug', $slug)->firstorfail();
        $blog->increment('view');
        return view('front.blogDetails', compact('blog'));
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function team()
    {
        $data = [
            'teams' => Team::published()->orderBy('position')->get(),
            'partners' => Partners::published()->get()
        ];
        return view('front.team', $data);
    }

    public function teamDetail($slug)
    {
        return Team::where('username', $slug)->firstorfail();
    }

    public function about()
    {
        return Team::where('username', $slug)->firstorfail();
    }
}
