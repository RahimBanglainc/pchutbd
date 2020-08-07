<?php

namespace App\Http\Controllers\Admin;

use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Subcategory::latest()->get();
        return view('admin.subcategory.index', compact('categorys'));
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
            'parent' => 'required',
            'img' => 'required|image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        $img = $request->file('img');
        $slug = Str::slug($request->name);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'-'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('subcategory'))
            {
                Storage::disk('public')->makeDirectory('subcategory');
            }

            $categoryImg = Image::make($img)->resize(100, 100)->save($imageName, 90);
            Storage::disk('public')->put('subcategory/'.$imageName,$categoryImg);
        }else{
            $imageName = "default.png";
        }

        $category = new Subcategory();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->parent = $request->parent;
        $category->status = 1;
        $category->img = $imageName;
        $category->save();

        return redirect()->route('admin.subcategory.index');
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
        $category = Subcategory::where('id', $id)->first();
        return view('admin.subcategory.edit', compact('category'));
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
            'parent' => 'required',
            'img' => 'required|image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        $category = Subcategory::where('id', $id)->first();
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
        $category->parent = $request->parent;
        $category->status = 1;
        $category->img = $imageName;
        $category->save();

        return redirect()->route('admin.subcategory.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = subcategory::where('id', $id)->first();

        if(Storage::disk('public')->exists('category/'.$category->img))
        {
            Storage::disk('public')->delete('category/'.$category->img);
        }

    $category->delete();

   // Toastr::Success('category Delete Successfully');

   return redirect()->route('admin.subcategory.index');
    }
}
