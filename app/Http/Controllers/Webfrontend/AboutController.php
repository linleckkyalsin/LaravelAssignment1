<?php

namespace App\Http\Controllers\Webfrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function aboutPage()
    {
        return view('about');
    }
}
