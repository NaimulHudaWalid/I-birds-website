<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IbirdsController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }
}
