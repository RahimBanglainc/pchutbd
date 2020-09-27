<?php

namespace App\Http\Controllers\Admin;

use App\Brand;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Http\Controllers\Controller;
use App\Subcategory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brandcategory.index', compact('brands'));
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
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'Subcategory_id' => 'required',
            'img' => 'required|image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        $img = $request->file('img');
        $slug = Str::slug($request->name);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('brand'))
            {
                Storage::disk('public')->makeDirectory('brand');
            }

            $categoryImg = Image::make($img)->resize(100, 100)->save($imageName, 90);
            Storage::disk('public')->put('brand/'.$imageName,$categoryImg);
        }else{
            $imageName = "default.png";
        }

        $category = new Brand();
        $category->name = $request->name;
        $category->slug = $slug;
        $category->Subcategory_id = $request->Subcategory_id;
        $category->status = 1;
        $category->img = $imageName;
        $category->save();

        return redirect()->route('admin.brand.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        return view('admin.brandcategory.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {
        $this->validate($request, [
            'name' => 'required',
            'Subcategory_id' => 'required',
        ]);
        $img = $request->file('img');
        $slug = Str::slug($request->name);
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('brand'))
            {
                Storage::disk('public')->makeDirectory('brand');
            }

            // delete old image here
            if(Storage::disk('public')->exists('brand/'.$brand->img))
            {
                Storage::disk('public')->delete('brand/'.$brand->img);
            }
            $categoryImg = Image::make($img)->resize(500, 350)->save($imageName, 90);
            Storage::disk('public')->put('brand/'.$imageName,$categoryImg);
        }else{
            $imageName = $brand->img;
        }

        $brand->name = $request->name;
        $brand->slug = $slug;
        $brand->Subcategory_id = $request->Subcategory_id;
        $brand->status = 1;
        $brand->img = $imageName;
        $brand->save();

        return redirect()->route('admin.brand.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {

        if(Storage::disk('local')->exists('category/'.$brand->img))
        {
            Storage::disk('local')->delete('category/'.$brand->img);
        }

        $brand->delete();

        // Toastr::Success('category Delete Successfully');

        return redirect()->route('admin.brand.index');
    }
}
