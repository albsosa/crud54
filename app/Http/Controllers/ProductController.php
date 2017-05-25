<?php

namespace crud54\Http\Controllers;

use Illuminate\Http\Request;
use crud54\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    public function index(){
        $products = \crud54\product::orderBy('id', 'DESC')->paginate();
        return view('products.index', compact('products'));

    }

    public function show($id){
    	$product= \crud54\product::find($id);
    	return view('products.show', compact('product'));
    }


      public function create(){
        return view('products.create');
    }

public function store(ProductRequest $request)
    {
        $product = new \crud54\product;
        $product->name  = $request->name;
        $product->short = $request->short;
        $product->body  = $request->body;
        $product->save();
        return redirect()->route('products.index');
    }



        public function edit($id)
    {
        $product = \crud54\product::find($id);
        
        return view('products.edit', compact('product'));
    }

    public function update(ProductRequest $request, $id)
    {
        $product = \crud54\product::find($id);
        $product->name  = $request->name;
        $product->short = $request->short;
        $product->body  = $request->body;
        $product->save();
        return redirect()->route('products.index')->with('info', 'El producto fue Actualizado...');
    }

    public function destroy($id){
    	$product= \crud54\product::find($id);
    	$product->delete();
    	return back()->with('info', 'El producto fue eliminado...');
    }
}
 