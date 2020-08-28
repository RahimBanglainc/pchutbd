<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Item;
use App\Stall;
use App\Subcategory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::latest()->get();

        return view('admin.item.index', compact('items'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        return view('admin.item.edit', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //  return $request;
         $this->validate($request, [
            'model' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        // image 0
        $img = $request->file('img');
        $currentDate = Carbon::now()->toDateString();
        if(isset($img))
        {
            $imageName = $currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            $imageNames = 's'.$currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
                Storage::disk('public')->makeDirectory('item/small/');
            }

            // delete old image here
            if(Storage::disk('public')->exists('item/'.$item->img))
            {
                Storage::disk('public')->delete('item/'.$item->img);
            }
            // delete old image here
            if(Storage::disk('public')->exists('item/small/s'.$item->img))
            {
                Storage::disk('public')->delete('item/small/s'.$item->img);
            }
            $userImg = Image::make($img)->resize(null, 130, function ($constraint) {
                $constraint->aspectRatio();})->save($imageNames, 90);
            Storage::disk('public')->put('item/small/'.$imageNames,$userImg);

            $userImg1 = Image::make($img)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName, 90);
                Storage::disk('public')->put('item/'.$imageName,$userImg1);
        }else{
            $imageName = $item->img;
        }

        // image 1
        $img1 = $request->file('img1');
        if(isset($img1))
        {

            $imageName1 = $currentDate.'-'.uniqid().'.'.$img1->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }

            // delete old image here
            if(Storage::disk('public')->exists('item/'.$item->img1))
            {
                Storage::disk('public')->delete('item/'.$item->img1);
            }
            $userImg1 = Image::make($img1)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName1, 90);
            Storage::disk('public')->put('item/'.$imageName1,$userImg1);
        }else{
            $imageName1 = $item->img1;
        }


        // image 2
        $img2 = $request->file('img2');
        if(isset($img2))
        {

            $imageName2 = $currentDate.'-'.uniqid().'.'.$img2->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }

            // delete old image here
            if(Storage::disk('public')->exists('item/'.$item->img2))
            {
                Storage::disk('public')->delete('item/'.$item->img2);
            }
            $userImg2 = Image::make($img2)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName2, 90);
            Storage::disk('public')->put('item/'.$imageName2,$userImg2);
        }else{
            $imageName2 = $item->img2;
        }

        // image 3
        $img3 = $request->file('img3');
        if(isset($img3))
        {

            $imageName3 = $currentDate.'-'.uniqid().'.'.$img3->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }

            // delete old image here
            if(Storage::disk('public')->exists('item/'.$item->img3))
            {
                Storage::disk('public')->delete('item/'.$item->img3);
            }
            $userImg3 = Image::make($img3)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName3, 90);
            Storage::disk('public')->put('item/'.$imageName3, $userImg3);
        }else{
            $imageName3 = $item->img3;
        }

        // image 4
        $img4 = $request->file('img4');
        if(isset($img4))
        {

            $imageName4 = $currentDate.'-'.uniqid().'.'.$img4->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }

            // delete old image here
            if(Storage::disk('public')->exists('item/'.$item->img4))
            {
                Storage::disk('public')->delete('item/'.$item->img4);
            }
            $userImg4 = Image::make($img4)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName4, 90);
            Storage::disk('public')->put('item/'.$imageName4,$userImg4);
        }else{
            $imageName4 = $item->img4;
        }

        $item->model = $request->model;
        $item->price = $request->price;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->offer = $request->offer;
        $item->img = $imageName;
        $item->img1 = $imageName1;
        $item->img2 = $imageName2;
        $item->img3 = $imageName3;
        $item->img4 = $imageName4;
        $item->warranty = $request->warranty;
        if(!$item->is_approve)
        {
            $item->is_approve = true;
            $item->status = true;

        }else{
            if($request->status == 1)
            {
                $item->status = true;
            }else{
                $item->status = false;
            }
        }
        $item->save();

        // $itemId = Item::where('slug', $slug)->first()->id;
        // for($i = 0; $i < $request->rowCount; $i++) {

        //     if($request->value[$i])
        //     {
        //         $data = $request->value[$i];
        //     }else{
        //         $data = 'N/A' ;
        //     }
        //     $value = new FeatureValue();
        //     $value->feature_id = $request->feature_id[$i];
        //     $value->item_id = $itemId;
        //     $value->position = $i;
        //     $value->value = $data;
        //     $value->save();
        // }

        return redirect()->route('admin.item.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}
