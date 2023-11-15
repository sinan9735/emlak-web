<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class IlanlarContoller extends Controller
{
    public function index()
    {

        return view('site.İlanlar.index');
    }
}
