<?php

namespace App\Http\Controllers\Site;


use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use App\User;

class HomePageController extends Controller
{
    public function index()
    {

        return view('site.homepage.index');
    }

}

