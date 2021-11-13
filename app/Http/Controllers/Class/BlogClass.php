<?php

namespace App\Http\Controllers\Class;

use App\Contracts\Menu;
use App\Models\Blog;

class BlogClass implements Menu
{
    private $slug;
    public function __construct($slug)
    {
        $this->slug = $slug;
    }
    public function getContentType()
    {
        $blog = Blog::where('slug', $this->slug)
            ->where('publishStatus', true)
            ->where('publishAt', '>', now())
            ->firstOrFail();

        return view('front.blog', compact('blog'));
    }
}
