<?php

namespace crud54\Http\Controllers;

use Illuminate\Http\Request;
use crud54\product;

class ProductController extends Controller
{
    public function index(){
    	$products = product::orderBy('id', 'DESC')->paginate();
    	return view('products.index', compact('products'));

    }
}
