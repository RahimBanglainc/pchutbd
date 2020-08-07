<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Category::latest()->get();
        return view('admin.category.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        $img = $request->file('img');
        $slug = Str::slug($request->name);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'-'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }

            $categoryImg = Image::make($img)->resize(100, 100)->save($imageName, 90);
            Storage::disk('public')->put('category/'.$imageName,$categoryImg);
        }else{
            $imageName = "default.png";
        }

        $category = new Category();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->status = 1;
        $category->img = $imageName;
        $category->save();

        return redirect()->route('admin.category.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::where('id', $id)->first();
        return view('admin.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'img' => 'required|image|mimes:jpeg,bmp,png,jpg,gif',
        ]);

        $category = Category::where('id', $id)->first();

        $img = $request->file('img');
        $slug = Str::slug($request->name);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('category'))
            {
                Storage::disk('public')->makeDirectory('category');
            }

            // delete old image here
            if(Storage::disk('public')->exists('category/'.$category->img))
            {
                Storage::disk('public')->delete('category/'.$category->img);
            }
            $categoryImg = Image::make($img)->resize(500, 350)->save($imageName, 90);
            Storage::disk('public')->put('category/'.$imageName,$categoryImg);
        }else{
            $imageName = $category->img;
        }

        $category->name = $request->name;
        $category->slug = $slug;
        $category->status = 1;
        $category->img = $imageName;
        $category->save();

        return redirect()->route('admin.category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::where('id', $id)->first();

        if(Storage::disk('public')->exists('category/'.$category->img))
        {
            Storage::disk('public')->delete('category/'.$category->img);
        }

    $category->delete();

   // Toastr::Success('category Delete Successfully');

   return redirect()->route('admin.category.index');
    }
}
