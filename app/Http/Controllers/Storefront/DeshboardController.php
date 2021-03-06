<?php

namespace App\Http\Controllers\Storefront;

use App\Stall;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DeshboardController extends Controller
{
    public function index()
    {

        $my_time = Carbon::now(); // today
        if(Auth::user()->is_seller)
        {

            $stall = Stall::where('user_id', Auth::user()->id)->first();
            $a= Item::where('stall_id', $stall->id )->latest()->count();
            $count = $stall->item_limit - $a ;
            return view('storefront.deshboard', compact('a', 'count', 'stall', 'my_time'));
        }else{

            return view('storefront.deshboard', compact('my_time'));
        }


    }
    public function stallshaw()
    {

        return view('storefront.stallreq');
    }
    public function stallcreate(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);

        $stall = new Stall();
        $stall->type = $request->type;
        $stall->name = $request->name;
        $stall->slug = Str_slug($request->name.'-'.uniqid());
        $stall->address = $request->address;
        $stall->phone = $request->phone;
        $stall->city = $request->city;
        $stall->user_id = Auth::User()->id;
        $stall->save();
        $seller = Auth::User();
        $seller->seller_req = true;
        $seller->save();

        return redirect()->route('client.stallreq');
    }

    public function profile()
    {

        return view('storefront.profile');
    }


    public function profileupdate(Request $request)
    {


        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'gender' => 'required',
            'country' => 'required',
            'city' => 'required',
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

            // delete old image here
            if(Storage::disk('public')->exists('user/'.Auth::User()->img))
            {
                Storage::disk('public')->delete('user/'.Auth::User()->img);
            }
            $userImg = Image::make($img)->resize(50, 50)->save($imageName, 90);
            Storage::disk('public')->put('user/'.$imageName,$userImg);
        }else{
            $imageName = Auth::User()->img;
        }

        $user = Auth::User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->address = $request->address;
        $user->phone = $request->phone;
        $user->gender = $request->gender;
        $user->country = $request->country;
        $user->city = $request->city;
        $user->img = $imageName;
        $user->save();


        return redirect()->route('client.dashboard');
    }

    public function passchange()
    {

        return view('storefront.password');
    }


    public function passupdate(Request $request)
    {


        $this->validate($request, [
            'password' => 'required',
            'confirmpassword' => 'required',
        ]);


            if($request->password == $request->confirmpassword )
            {
                $password = bcrypt($request->password);
            }else{
                return redirect()->route('client.Passwordshow');
            }

        $user = Auth::User();
        $user->password = $password;
        $user->save();


        return redirect()->route('client.dashboard');
    }

    public function editstall()
    {

        return view('storefront.editstall');
    }

    public function editstallpost(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'phone' => 'required',
            'hotline1' => 'required',
            'hotline2' => 'required',
            'person_name' => 'required',
            'about' => 'required',
        ]);


            if(Auth::User()->is_seller == true )
            {
                $stall = Auth::User()->stall()->where('user_id', Auth::User()->id)->first();
                $stall->email = $request->email;
                $stall->phone = $request->phone;
                $stall->hotline1 = $request->hotline1;
                $stall->hotline2 = $request->hotline2;
                $stall->person_name = $request->person_name;
                $stall->about = $request->about;
                $stall->business = $request->business;
                $stall->web = $request->web;
                $stall->fax = $request->fax;
                $stall->save();

            }else{
                return redirect()->route('client.stallreq');
            }



            return redirect()->route('client.dashboard');
        }

        public function favourite()
        {
           $items = Auth::user()->favorite_items()->get();
            return view('storefront.favourite', compact('items'));
        }
    // only pages here




    public function payment()
    {

        return view('storefront.payment');
    }

    public function order()
    {

        return view('storefront.order');
    }

    public function myorder()
    {

        return view('storefront.myorder');
    }

    public function invoice()
    {

        return view('storefront.invoice');
    }

    public function item()
    {

        return view('storefront.item');
    }





}
