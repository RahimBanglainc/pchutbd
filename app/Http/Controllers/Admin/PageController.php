<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Page;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pages = Page::latest()->get();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $slug = Str::slug($request->slug);


        $page = new Page();
        $page->name = $request->name;
        $page->slug = $slug;
        $page->body = $request->body;
        if(isset($request->status))
        {
            $page->status = true;
        }else{
            $page->status = false;
        }
        $page->save();

        // Toastr::Success('Blog Submit Successfully');

        return redirect()->route('admin.page.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        // return $blog;
        // return view('admin.page.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        return view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
         // return $request;
         $this->validate($request, [
            'name' => 'required',
            'slug' => 'required',
            'body' => 'required',
        ]);

        $slug = Str::slug($request->slug);

        $page->name = $request->name;
        $page->slug = $slug;
        $page->body = $request->body;
        if(isset($request->status))
        {
            $page->status = true;
        }else{
            $page->status = false;
        }
        $page->save();

        // Toastr::Success('Blog Submit Successfully');

        return redirect()->route('admin.page.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy(Page $page)
    {

        $page->delete();

       // Toastr::Success('Blog Delete Successfully');

       return redirect()->route('admin.page.index');

    }
}
