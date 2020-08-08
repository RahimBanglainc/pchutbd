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
        return view('storefront.item');
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
        return $request;
        $this->validate($request, [
            'category_id' => 'required',
            'model' => 'required',
            'price' => 'required',
            'title' => 'required',
            'description' => 'required',
            'offer' => 'required',
            'img' => 'required',
        ]);

        $img = $request->file('img');
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
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
            $userImg = Image::make($img)->resize(50, 50)->save($imageName, 90);
            Storage::disk('public')->put('item/'.$imageName,$userImg);
        }else{
            $imageName = 0;
        }


        $item = new Item();
        $item->category_id = $request->category_id;
        $item->model = $request->model;
        $item->slug = Str_slug($request->title.'-'.uniqid());
        $item->price = $request->price;
        $item->title = $request->title;
        $item->description = $request->description;
        $item->offer = $request->offer;
        $item->img = $request->img;
        $item->img1 = $request->img1;
        $item->img2 = $request->img2;
        $item->img3 = $request->img3;
        $item->img4 = $request->img4;
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
