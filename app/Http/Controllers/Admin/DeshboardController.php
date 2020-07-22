<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DeshboardController extends Controller
{
    public function index()
    {
        return view('admin.deshboard');
    }
    public function users()
    {
        return view('admin.users');
    }
}
