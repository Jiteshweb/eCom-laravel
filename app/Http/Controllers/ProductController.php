<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function index()
    {
        $data = Product::get();
        return view('products',['products'=>$data]);
    }
    public function detail($id)
    {
        $data = Product::find($id);
        return view('detail',['product'=>$data]);
    }
    public function search(Request $req)
    {
        $data = Product::where('name','Like','%'.$req->input('query').'%')->get();
        return view('search',['products'=>$data]);
    }
}
