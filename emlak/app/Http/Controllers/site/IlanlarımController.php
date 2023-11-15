<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class IlanlarımController extends Controller
{
    public function index()
    {

        return view('site.Ilanlarım.index');
    }
}
