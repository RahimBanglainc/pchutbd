<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Settings;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


class SettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $settings = Settings::where('id', 1)->first();
        return view('admin.settings.index', compact('settings'));
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
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function show(Settings $settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function edit(Settings $settings)
    {
        // return view('admin.settings.index', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Settings $settings)
    {
        // return $request;
        $sett = Settings::where('id', 1)->first();

        $this->validate($request, [
            'site_name' => 'required',
            'copyright' => 'required',
        ]);
        $currentDate = Carbon::now()->toDateString();
        $slug = Str::slug($request->site_name).uniqid();
        // get image from form
        $img1 = $request->file('head_img');
        if(isset($img1))
        {
            $imageName1 = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img1->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('img'))
            {
                Storage::disk('public')->makeDirectory('img');
            }

            // delete old image here
            if(Storage::disk('public')->exists('img/'.$sett->head_img))
            {
                Storage::disk('public')->delete('img/'.$sett->head_img);
            }
            $blogImg1 = Image::make($img1)->resize(300, 80)->save($imageName1, 90);
            Storage::disk('public')->put('img/'.$imageName1,$blogImg1);
        }else{
            $imageName1 = $sett->head_img;
        }

        // get image from form
        $img2 = $request->file('foo_img');
        if(isset($img2))
        {
            $imageName2 = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img2->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('img'))
            {
                Storage::disk('public')->makeDirectory('img');
            }

            // delete old image here
            if(Storage::disk('public')->exists('img/'.$sett->foo_img))
            {
                Storage::disk('public')->delete('img/'.$sett->foo_img);
            }
            $blogImg2 = Image::make($img2)->resize(300, 80)->save($imageName2, 90);
            Storage::disk('public')->put('img/'.$imageName2,$blogImg2);
        }else{
            $imageName2 = $sett->foo_img;
        }

        // get image from form
        $img3 = $request->file('favicon');
        if(isset($img3))
        {
            $imageName3 = $slug.'-'.$currentDate.'-'.uniqid().'.'.$img3->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('img'))
            {
                Storage::disk('public')->makeDirectory('img');
            }

            // delete old image here
            if(Storage::disk('public')->exists('img/'.$sett->favicon))
            {
                Storage::disk('public')->delete('img/'.$sett->favicon);
            }
            $blogImg3 = Image::make($img3)->resize(200, 200)->save($imageName3, 90);
            Storage::disk('public')->put('img/'.$imageName3,$blogImg3);
        }else{
            $imageName3 = $sett->favicon;
        }

        $sett->site_name = $request->site_name;
        $sett->copyright = $request->copyright;
        $sett->head_img = $imageName1;
        $sett->foo_img = $imageName2;
        $sett->favicon = $imageName3;
        $sett->fb = $request->fb;
        $sett->instra = $request->instra;
        $sett->youtube = $request->youtube;
        $sett->pinterest = $request->pinterest;
        $sett->faq = $request->faq;
        $sett->contact = $request->contact;
        $sett->career = $request->career;
        $sett->privacy = $request->privacy;
        $sett->terms = $request->terms;
        $sett->app = $request->app;
        $sett->save();

        // Toastr::Success('Blog Update Successfully');

        return redirect()->route('admin.dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Settings  $settings
     * @return \Illuminate\Http\Response
     */
    public function destroy(Settings $settings)
    {
        //
    }
}
