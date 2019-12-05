<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    public function index(){
    	return Product::orderBy('created_at', 'desc')->get();
    }

    public function store(Request $request){
    	$product = Product::create($request->all());
        return $product;
    }    	
}
