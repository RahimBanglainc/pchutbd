<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Category;
use App\Feature;
use App\Item;
use App\Page;
use App\Stall;
use App\Subcategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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


                return view('subcategory', compact('category', 'subcategories', 'my_time'));
    }



    public function subcategory($slug)
    {
        $subcat = Subcategory::where('slug', $slug)->first();
        $items = Item::where([
                        ['status', '=', true],
                        ['subcategory_id', '=', $subcat->id],
                        ['is_approve', '=', true],
                        ])->paginate(20);

     $sitems = Item::where([
        ['status', '=', true],
        ['subcategory_id', '=', $subcat->id],
        ['is_approve', '=', true],
        ['stock', '=', true],
        ])->latest()->take(10)->get();

        $count = Item::where([
            ['status', '=', true],
            ['subcategory_id', '=', $subcat->id],
            ['is_approve', '=', true],
            ])->count();
        $my_time = Carbon::now(); // today


        return view('subcategoryitem', compact('items', 'sitems', 'my_time', 'count', 'subcat'));
    }


    public function page($slug)
    {

        $page = Page::where('slug', $slug)->first();
        $pageKey = 'Page_'.$page->id;
    if( $page->status )
    {

        if(!Session::has($pageKey))
        {
            $page->increment('views');
            Session::put($pageKey,1);
        }

        return view('page', compact('page'));
    }else{
        return redirect()->route('index');
    }
    }

    public function feature($id)
    {
        $features = Feature::where('subcategory_id', $id)->get();

        return view('storefront.components.feature', compact('features'));
    }

    public function allItem()
    {

        $items = Item::where([
                        ['status', '=', true],
                        ['is_approve', '=', true],
                        ])->paginate(20);


        $count = Item::where([
            ['status', '=', true],
            ['is_approve', '=', true],
            ])->count();
        $my_time = Carbon::now(); // today


        return view('moreitem', compact('items','my_time', 'count'));
    }

    public function search(Request $request)
    {

        // return $request;
        $query = $request->input('query');
        $items = Item::where('title', 'like', "%$query%")
                        ->where([
                        ['status', '=', true],
                        ['is_approve', '=', true],
                        ])->paginate(10);


        $count = Item::where('title', 'like', "%$query%")
        ->where([
        ['status', '=', true],
        ['is_approve', '=', true],
        ])->count();
        $my_time = Carbon::now(); // today


        return view('search', compact('items','my_time', 'count'));
    }



// for favorite cotroller
    public function favorite($id)
    {

        // return $id;
        $user = Auth::user();
        $isFavorite = $user->favorite_items()->where('item_id', $id)->count();

        if($isFavorite == 0)
        {
            $user->favorite_items()->attach($id);
            return redirect()->back();
        }else{
            $user->favorite_items()->detach($id);
            return redirect()->back();
        }

    }

}
