<?php

namespace App\Http\Controllers\Webfrontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function productPage()
    {
        $products = ['phone', 'lipstick', 'dryer'];
        return view('product', [
            'products' => $products
        ]);
    }
}
