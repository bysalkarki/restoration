<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * @param Request $request
     */
    public function search(Request $request)
    {
        if ($search = !$request->search) {
            return redirect()->back();
        }

        $data = [
            'blogs' => Blog::where('title', 'like', "%$search%")->latest('publishAt')->published()->paginate(10)
        ];
        return view('front.blog', $data);

    }
}
