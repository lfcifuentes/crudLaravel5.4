<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductsRequest;

use App\Products;
class ProductsController extends Controller
{
    public function index(){
    	$products  = Products::orderBy('id','DESC')->paginate(15);

    	return view('products.index',compact('products'));
    }

    public function create(){
    	return view('products.create');	
    }

    public function store(ProductsRequest $request){
    	$product = new Products();

    	$product->name  = $request->name;

    	$product->short = $request->short;

    	$product->body 	= $request->body;

    	$product->save();

    	return redirect()->route("products.index")
    					 ->with('info','El producto fue guardado');
    }
    
    public function edit($id){
    	$product = Products::find($id);

    	return view('products.edit',compact('product'));	
    }

    public function update(ProductsRequest $request,$id){

    	$product = Products::find($id);

    	$product->name  = $request->name;

    	$product->short = $request->short;

    	$product->body 	= $request->body;

    	$product->save();

    	return redirect()->route("products.index")
    					 ->with('info','El producto fue actualizado');
    }
    
    public function show($id){
    	$product = Products::find($id);

    	return view('products.show',compact('product'));	
    }
    
    public function delete($id){
    	$product = Products::find($id);

    	return view('products.show',compact('product'));	
    }

    public function destroy($id){
    	$product = Products::find($id);

    	$product->delete();

    	return back()->with('info','El producto fue eliminado');	
    }
}
