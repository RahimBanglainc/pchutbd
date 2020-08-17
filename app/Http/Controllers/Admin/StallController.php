<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Stall;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class StallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stalls = Stall::latest()->get();

        return view('admin.stall.index', compact('stalls'));
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
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function show(Stall $stall)
    {
        return view('admin.stall.show', compact('stall'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function edit(Stall $stall)
    {
        return view('admin.stall.edit', compact('stall'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Stall $stall)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'address' => 'required',
            'area' => 'required',
            'city' => 'required',
            'postcode' => 'required',
            'country' => 'required',
            'business' => 'required',
            'phone' => 'required',
            'hotline1' => 'required',
            'email' => 'required',
            'person_name' => 'required',
            'about' => 'required',
            'item_exp' => 'required',
            'item_limit' => 'required',
            'img' => 'image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        // get image from form
        $img = $request->file('img');
        $slug = Str_slug($request->name).uniqid();
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $slug.'-'.$currentDate.'-'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('stall'))
            {
                Storage::disk('public')->makeDirectory('stall');
            }

            // delete old image here
            if(Storage::disk('public')->exists('stall/'.$stall->img))
            {
                Storage::disk('public')->delete('stall/'.$stall->img);
            }
            $blogImg = Image::make($img)->resize(200, 200)->save($imageName, 90);
            Storage::disk('public')->put('stall/'.$imageName,$blogImg);
        }else{
            $imageName = $stall->img;
        }

        $stall->name = $request->name;
        $stall->address = $request->address;
        $stall->area = $request->area;
        $stall->city = $request->city;
        $stall->postcode = $request->postcode;
        $stall->country = $request->country;
        $stall->business = $request->business;
        $stall->phone = $request->phone;
        $stall->hotline1 = $request->hotline1;
        $stall->hotline2 = $request->hotline2;
        $stall->email = $request->email;
        $stall->web = $request->web;
        $stall->fax = $request->fax;
        $stall->person_name = $request->person_name;
        $stall->about = $request->about;
        $stall->plan = $request->plan;
        $stall->item_exp = $request->item_exp;
        $stall->item_limit = $request->item_limit;
        if(!$stall->user()->find($stall->user_id)->is_seller)
        {
            $user = $stall->user()->where('id', $stall->user_id)->first();
            $user->is_seller = true;
            $user->save();
            $stall->status = true;

        }else{
            if($request->status == 1)
            {
                $stall->status = true;
            }else{
                $stall->status = false;
            }

        }
        $stall->img = $imageName;
        $stall->save();


        // Toastr::Success('stall Update Successfully');

        return redirect()->route('admin.stall.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stall  $stall
     * @return \Illuminate\Http\Response
     */
    public function destroy(Stall $stall)
    {
        //
    }
}
