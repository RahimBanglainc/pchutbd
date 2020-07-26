<?php

namespace App\Http\Controllers\Admin;

use App\Blog;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::latest()->get();
        return view('admin.blog.blog', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'title' => 'required',
            'body' => 'required',
            'img' => 'image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        // get image from form
        $img = $request->file('img');
        $slug = Str::slug($request->title);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('blog'))
            {
                Storage::disk('public')->makeDirectory('blog');
            }

            $blogImg = Image::make($img)->resize(500, null)->save($imageName, 90);
            Storage::disk('public')->put('blog/'.$imageName,$blogImg);
        }else{
            $imageName = "blog.png";
        }

        $blog = new Blog();
        $blog->title = $request->title;
        $blog->slug = $slug;
        $blog->img = $imageName;
        $blog->body = $request->body;
        if(isset($request->status))
        {
            $blog->status = true;
        }else{
            $blog->status = false;
        }
        $blog->save();

        // Toastr::Success('Blog Submit Successfully');

        return redirect()->route('admin.blog.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
