<?php

namespace App\Http\Controllers\admingiris;

use App\Http\Controllers\Controller;

class AdminGirisController extends Controller
{
    public function index()
    {

        return view('admingiris.Admingiris.index');
    }
}
