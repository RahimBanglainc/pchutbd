<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Item;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class DeshboardController extends Controller
{
    public function index()
    {
        $items = Item::latest()->get();

        return view('admin.deshboard', compact('items'));
    }

}
