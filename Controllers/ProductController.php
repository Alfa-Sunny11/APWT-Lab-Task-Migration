<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    function index(){
        return view('home');
    }
    function create(){
        return view('productCreate');
    }
    function index2(){
        return view('productDetail');
    }
    function index3(){
        return view('productList');
    }


    function getdata(Request $req){
        $validateddata = $req->validate([
            'name' =>'required|string',
            'code' => 'required|max:12',
            'description' => 'required',
            'category' => 'required',
            'price' => 'required',
            'quantity' => 'required',
            'date' => 'required',
            'rate' => 'required|min:1|max:10',
            'purchased' => 'required'
        ],
        [
            'name.required' => 'Enter Product Name',
            'code.required' => 'Enter Product Code',
            'description.required' => 'Write Product Description',
            'category.required' => 'Select Any Category',
            'price.required' => 'Enter Product Price',
            'quantity.required' => 'Select Quantity',
            'date.required' => 'Select Date',
            'rate.required' => 'Rating The Product',
        ]);
        $var = new Product();
        $var->name = $req->input('name');
        $var->code = $req->input('code');
        $var->description = $req->input('description');
        $var->category = $req->input('category');
        $var->price = $req->input('price');
        $var->quantity = $req->input('quantity');
        $var->date = $req->input('date');
        $var->rate= $req->input('rate');
        $var->purchased= $req->input('purchased');
        $var->save();
       // return 'Full Name: '.$name.'<br>'.'Email: '.$code.'<br>'.'Query: '.$description;
      // return 'Name: '.$name.'<br>'.'code: '.$code.'<br>'.'description: '.$description.'<br>'.'category: '.$category.'price: '.$price.'<br>'.'quantity: '.$quantity.'<br>'.'date: '.$date.'<br>'.'rate: '.$rate.'<br>'.'purchased: '.$purchased;
      return "ok";
    }

    public function list(){
     //   $products = array();
        $products = Product::all();
        return view('productList')->with('product',$products);
    }
    public function details(){
        //   $products = array();
           $products = Product::all();
           return view('productDetail')->with('product',$products);
       }
    
    public function edit(Request $request){
        //
        $id = $request->id;

        $product = Product::where('id',$id)->first();
       // return $product;
        return view('productEdit')->with('product', $product);

    }   
       
    public function editSubmit(Request $req){
        
        $var = Product::where('id',$req->id)->first();
        $var->name = $req->input('name');
        $var->code = $req->input('code');
        $var->description = $req->input('description');
        $var->category = $req->input('category');
        $var->price = $req->input('price');
        $var->quantity = $req->input('quantity');
        $var->date = $req->input('date');
        $var->rate= $req->input('rate');
        $var->purchased= $req->input('purchased');
        $var->save();
        return redirect()->route('list');

    }
    
    public function delete(Request $request){
        $var = Product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('list');
    }    
}
