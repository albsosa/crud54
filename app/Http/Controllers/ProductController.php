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

    public function show($id){
    	$product= product::find($id);
    	return view('products.show', compact('product'));
    }

     public function edit($id){
        $product= product::find($id);
        return view('products.edit', compact('product'));
    }
      public function create(){
        return view('products.create');
    }

    public function destroy($id){
    	$product= product::find($id);
    	$product->delete();
    	return back()->with('info', 'El producto fue eliminado...');
    }
}
 