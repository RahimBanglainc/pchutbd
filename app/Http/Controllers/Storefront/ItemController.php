<?php

namespace App\Http\Controllers\Storefront;

use App\Http\Controllers\Controller;
use App\Item;
use App\Stall;
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
        $stall = Stall::where('user_id', Auth::user()->id)->first();
        $a= Item::where('stall_id', $stall->id )->latest()->count();
        $count = $stall->item_limit - $a ;

        return view('storefront.postitem', compact('stall', 'count'));
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
            if(!Storage::disk('public')->exists('item'))
            {
                Storage::disk('public')->makeDirectory('item');
            }

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg = Image::make($img)->resize(150, 150)->save($imageName, 90);
            Storage::disk('public')->put('item/'.$imageName,$userImg);
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
            $userImg1 = Image::make($img1)->resize(150, 150)->save($imageName1, 90);
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
            $userImg2 = Image::make($img2)->resize(150, 150)->save($imageName2, 90);
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
            $userImg3 = Image::make($img3)->resize(150, 150)->save($imageName3, 90);
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
            $userImg4 = Image::make($img4)->resize(150, 150)->save($imageName4, 90);
            Storage::disk('public')->put('item/'.$imageName4,$userImg4);
        }else{
            $imageName4 = 0;
        }


        $item = new Item();
        $item->subcategory_id = $request->subcategory_id;
        $item->model = $request->model;
        $item->slug = Str_slug($request->title.'-'.uniqid());
        $item->price = $request->price;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->offer = $request->offer;
        $item->img = $imageName;
        $item->img1 = $imageName1;
        $item->img2 = $imageName2;
        $item->img3 = $imageName3;
        $item->img4 = $imageName4;
        $item->feature_id = 1;
        $item->user_id = Auth::User()->id;
        $item->stall_id = Auth::User()->stall()->first()->id;
        $item->save();

        // $seller = Auth::User();
        // $seller->seller_req = true;
        // $seller->save();

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
        //
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
