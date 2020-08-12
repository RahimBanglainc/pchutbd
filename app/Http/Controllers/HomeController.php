<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Item;
use App\Stall;
use App\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function blogindex()
    {
        $count = Blog::where('status', '=', true);

        $blogs = Blog::where('status', '=', true)->latest()->Paginate(10);

        return view('blog.index', compact('blogs','count'));
    }

    public function blogshow($slug)
    {
        $count = Blog::where('status', '=', true);

        $blog = Blog::where('slug', $slug)->first();

        $blogKey = 'blog_'.$blog->id;

        if(!Session::has($blogKey))
        {
            $blog->increment('view_count');
            Session::put($blogKey,1);
        }

        if($count->count() < 8)
        {

            $rblogs = Blog::all()->where('status', '=', true)->random($count->count());

        }else{

            $rblogs = Blog::all()->where('status', '=', true)->random(8);
        }

        return view('blog.show', compact('blog','rblogs'));
    }

    public function stallshow($slug)
    {
        $my_time = Carbon::now(); // today

        $count = Stall::where('status', '=', true);

        $stall = Stall::where('slug', $slug)->first();

        $items = Item::where([
            ['status', '=', true],
            ['stall_id', '=', $stall->id],
            ['is_approve', '=', true],
            ])
            ->latest()
            ->Paginate(20);

            $itemOne = Item::where([
                ['status', '=', true],
                ['stall_id', '=', $stall->id],
                ['is_approve', '=', true],
                ])
                ->Paginate(1);

        $itemCount = Item::where([
            ['status', '=', true],
            ['stall_id', '=', $stall->id],
            ['is_approve', '=', true],
            ])->latest();

        // $blogKey = 'blog_'.$blog->id;

        // if(!Session::has($blogKey))
        // {
        //     $blog->increment('view_count');
        //     Session::put($blogKey,1);
        // }


        return view('stallview', compact('stall','items', 'itemCount','my_time', 'itemOne'));
    }

    public function stallList()
    {
        $count = Stall::where('status', '=', true);

        $stalls = Stall::where('status', '=', true)->latest()->Paginate(15);

        return view('stalls', compact('stalls','count'));
    }

    public function item($slug)
    {
        $item = Item::where('slug', $slug)->first();
        $stall = Stall::where('id', $item->stall_id)->first();
        $my_time = Carbon::now(); // today
        $count = Item::where([
            ['status', '=', true],
            ['subcategory_id', '=', $item->subcategory_id],
            ['is_approve', '=', true],
            ['stock', '=', true],
            ]);


        if($item->is_approve && $item->status)
        {
            $itemKey = 'item_'.$item->id;

            if(!Session::has($itemKey))
            {
                $item->increment('views');
                Session::put($itemKey,1);
            }

            if($count->count() < 6)
            {

                $ritems = Item::where([
                    ['status', '=', true],
                    ['subcategory_id', '=', $item->subcategory_id],
                    ['is_approve', '=', true],
                    ['stock', '=', true],
                    ])
                    ->get()
                    ->random($count->count());

            }else{

                $ritems = Item::where([
                    ['status', '=', true],
                    ['subcategory_id', '=', $item->subcategory_id],
                    ['is_approve', '=', true],
                    ['stock', '=', true],
                    ])
                    ->get()
                    ->random(6);
            }

            if($count->count() < 3)
            {

                $sitems = Item::where([
                    ['status', '=', true],
                    ['subcategory_id', '=', $item->subcategory_id],
                    ['is_approve', '=', true],
                    ['stock', '=', true],
                    ])
                    ->get()
                    ->random($count->count());

            }else{

                $sitems = Item::where([
                    ['status', '=', true],
                    ['subcategory_id', '=', $item->subcategory_id],
                    ['is_approve', '=', true],
                    ['stock', '=', true],
                    ])
                    ->get()
                    ->random(3);
            }

            return view('item', compact('item','ritems', 'stall', 'sitems', 'my_time'));
        }else{
            return redirect()->route('index');
        }

    }


    public function category($slug)
    {
        $category = Category::where('slug', $slug)->first();
        $subcategories = Subcategory::where('Category_id', $category->id)->get();

        $my_time = Carbon::now(); // today
        // $stall = Stall::where('id', $item->stall_id)->first();
        // $count = Item::where([
        //     ['status', '=', true],
        //     ['subcategory_id', '=', $item->subcategory_id],
        //     ['is_approve', '=', true],
        //     ['stock', '=', true],
        //     ]);


        // if($item->is_approve && $item->status)
        // {
        //     $itemKey = 'item_'.$item->id;

        //     if(!Session::has($itemKey))
        //     {
        //         $item->increment('views');
        //         Session::put($itemKey,1);
        //     }

        //     if($count->count() < 6)
        //     {

        //         $ritems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random($count->count());

        //     }else{

        //         $ritems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random(6);
        //     }

        //     if($count->count() < 3)
        //     {

        //         $sitems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random($count->count());

        //     }else{

        //         $sitems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random(3);
        //     }

        //     return view('subcategory', compact('item','ritems', 'stall', 'sitems', 'my_time'));
        // }else{
            //     return redirect()->route('index');
            // }

                return view('subcategory', compact('category', 'subcategories', 'my_time'));
    }



    public function subcategory($slug)
    {
        $items = Item::where('slug', $slug)->first();
        $my_time = Carbon::now(); // today
        // $stall = Stall::where('id', $item->stall_id)->first();
        // $count = Item::where([
        //     ['status', '=', true],
        //     ['subcategory_id', '=', $item->subcategory_id],
        //     ['is_approve', '=', true],
        //     ['stock', '=', true],
        //     ]);


        // if($item->is_approve && $item->status)
        // {
        //     $itemKey = 'item_'.$item->id;

        //     if(!Session::has($itemKey))
        //     {
        //         $item->increment('views');
        //         Session::put($itemKey,1);
        //     }

        //     if($count->count() < 6)
        //     {

        //         $ritems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random($count->count());

        //     }else{

        //         $ritems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random(6);
        //     }

        //     if($count->count() < 3)
        //     {

        //         $sitems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random($count->count());

        //     }else{

        //         $sitems = Item::where([
        //             ['status', '=', true],
        //             ['subcategory_id', '=', $item->subcategory_id],
        //             ['is_approve', '=', true],
        //             ['stock', '=', true],
        //             ])
        //             ->get()
        //             ->random(3);
        //     }

        //     return view('subcategory', compact('item','ritems', 'stall', 'sitems', 'my_time'));
        // }else{
            //     return redirect()->route('index');
            // }

                return view('subcategoryitem', compact('items', 'my_time'));
    }





}
