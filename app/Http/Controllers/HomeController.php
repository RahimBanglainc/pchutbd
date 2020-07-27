<?php

namespace App\Http\Controllers;

use App\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blogindex()
    {
        $count = Blog::where('status', '=', true);

        $blogs = Blog::where('status', '=', true)->latest()->Paginate(10);

        return view('blog.index', compact('blogs','count'));
    }

    public function blogshow($slug)
    {
        $blog = Blog::where('slug', $slug)->first();

        $rblogs = Blog::all()->where('status', '=', true)->random(8);

        return view('blog.show', compact('blog','rblogs'));
    }

}
