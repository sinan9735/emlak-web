<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

class OnaypageController extends Controller
{
    public function index()
    {

        return view('admin.onaysayfa.index');
    }
}
