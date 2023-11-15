<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;

class UserProfilController extends Controller
{
    public function index()
    {

        return view('site.userprofil.index');
    }
}
