<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();

        return view('admin.users', compact('users'));
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
            'email' => 'required',
            'address' => 'required',
            'password' => 'required',
            'phone' => 'required',
            'img' => 'image|mimes:jpeg,bmp,png,jpg,gif',
        ]);
        // get image from form
        $img = $request->file('img');
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('user'))
            {
                Storage::disk('public')->makeDirectory('user');
            }

            // // delete old image here
            // if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            // {
            //     Storage::disk('public')->delete('user/'.Auth::User()->img);
            // }
            $userImg = Image::make($img)->resize(50, 50)->save($imageName, 90);
            Storage::disk('public')->put('user/'.$imageName,$userImg);
        }else{
            $imageName = 0;
        }

        $user = new User();
        $user->name = $request->name;
        $user->password = bcrypt($request->password);
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->img = $imageName;
        $user->save();


        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.edituser', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        // return $request;
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);
        // get image from form
        $img = $request->file('img');
        if(isset($img))
        {
            $currentDate = Carbon::now()->toDateString();
            $imageName = $currentDate.'-'.uniqid().'.'.$img->getClientOriginalExtension();
            if(!Storage::disk('public')->exists('user'))
            {
                Storage::disk('public')->makeDirectory('user');
            }

            // delete old image here
            if(Storage::disk('public')->exists('user/'.$user->img))
            {
                Storage::disk('public')->delete('user/'.$user->img);
            }
            $userImg = Image::make($img)->resize(50, 50)->save($imageName, 90);
            Storage::disk('public')->put('user/'.$imageName,$userImg);
        }else{
            $imageName = $user->img;
        }
        if($request->password)
        {

            $user->password = bcrypt($request->password);
        }
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->img = $imageName;
        $user->save();


        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
