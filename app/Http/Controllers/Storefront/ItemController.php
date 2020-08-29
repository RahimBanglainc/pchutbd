<?php

namespace App\Http\Controllers\Storefront;

use App\FeatureValue;
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
        $items = Item::where('user_id', Auth::user()->id)->latest()->Paginate(20);
        $itemCount = Item::where('user_id', Auth::user()->id)->latest();

        return view('storefront.item', compact('items', 'itemCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $my_time = Carbon::now(); // today
        $stall = Stall::where('user_id', Auth::user()->id)->first();
        $a= Item::where('stall_id', $stall->id )->latest()->count();
        $count = $stall->item_limit - $a ;
        $subcats = Subcategory::all();

        return view('storefront.postitem', compact('stall', 'count','my_time', 'subcats'));
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
            'subcategory_id' => 'required',
            'model' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required',
            'img' => 'required',
        ]);
        // image 0
        $img = $request->file('img');
        $currentDate = Carbon::now()->toDateString();
        if(isset($img))
        {
            $imageName = $currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            $imageNames = 's'.$imageName;
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
                Storage::disk('public')->makeDirectory('item/small/');
            }

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg = Image::make($img)->resize(null, 130, function ($constraint) {
                $constraint->aspectRatio();})->save($imageNames, 90);
            Storage::disk('public')->put('item/small/'.$imageNames,$userImg);

            $userImg1 = Image::make($img)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName, 90);
                Storage::disk('public')->put('item/'.$imageName,$userImg1);
        }else{
            $imageName = 0;
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

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg1 = Image::make($img1)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName1, 90);
            Storage::disk('public')->put('item/'.$imageName1,$userImg1);
        }else{
            $imageName1 = 0;
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

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg2 = Image::make($img2)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName2, 90);
            Storage::disk('public')->put('item/'.$imageName2,$userImg2);
        }else{
            $imageName2 = 0;
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

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg3 = Image::make($img3)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName3, 90);
            Storage::disk('public')->put('item/'.$imageName3, $userImg3);
        }else{
            $imageName3 = 0;
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

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg4 = Image::make($img4)->resize(null, 350, function ($constraint) {
                $constraint->aspectRatio();})->save($imageName4, 90);
            Storage::disk('public')->put('item/'.$imageName4,$userImg4);
        }else{
            $imageName4 = 0;
        }

        $slug = Str_slug($request->title.'-'.uniqid());
        $item = new Item();
        $item->subcategory_id = $request->subcategory_id;
        $item->model = $request->model;
        $item->slug =  $slug;
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
        $item->feature_id = $request->subcategory_id;
        $item->user_id = Auth::User()->id;
        $item->stall_id = Auth::User()->stall()->first()->id;
        $item->save();

        $itemId = Item::where('slug', $slug)->first()->id;
        for($i = 0; $i < $request->rowCount; $i++) {

            if($request->value[$i])
            {
                $data = $request->value[$i];
            }else{
                $data = 'N/A' ;
            }
            $value = new FeatureValue();
            $value->feature_id = $request->feature_id[$i];
            $value->item_id = $itemId;
            $value->position = $i;
            $value->value = $data;
            $value->save();
        }

        return redirect()->route('client.item.index');
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
        return view('storefront.edititem', compact('item'));
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
        // return $request;
        $this->validate($request, [
            'stock' => 'required',
            'price' => 'required',
            'ship_dhaka' => 'required',
            'ship_bd' => 'required',
        ]);

        if($item->status && $item->is_approve)
        {
        $item->stock = $request->stock;
        $item->price = $request->price;
        $item->ship_dhaka = $request->ship_dhaka;
        $item->ship_bd = $request->ship_bd;
        $item->offer = $request->offer;
        $item->save();
        return redirect()->route('client.item.index');
    }else{

        return redirect()->route('client.item.index');

        }

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
