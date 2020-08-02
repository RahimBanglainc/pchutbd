<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Stall;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
        $count = Blog::where('status', '=', true);

        $blog = Blog::where('slug', $slug)->first();

        $blogKey = 'blog_'.$blog->id;

        if(!Session::has($blogKey))
        {
            $blog->increment('view_count');
            Session::put($blogKey,1);
        }

        if($count->count() < 8)
        {

            $rblogs = Blog::all()->where('status', '=', true)->random($count->count());

        }else{

            $rblogs = Blog::all()->where('status', '=', true)->random(8);
        }

        return view('blog.show', compact('blog','rblogs'));
    }

    public function stallshow($slug)
    {
        $count = Stall::where('status', '=', true);

        $stall = Stall::where('slug', $slug)->first();

        // $blogKey = 'blog_'.$blog->id;

        // if(!Session::has($blogKey))
        // {
        //     $blog->increment('view_count');
        //     Session::put($blogKey,1);
        // }

        if($count->count() < 8)
        {

            $rstalls = Stall::all()->where('status', '=', true)->random($count->count());

        }else{

            $rstalls = stall::all()->where('status', '=', true)->random(8);
        }

        return view('stallview', compact('stall','rstalls'));
    }

}
