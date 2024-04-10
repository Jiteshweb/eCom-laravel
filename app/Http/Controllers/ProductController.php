<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;

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

    public function addToCart(Request $req)
    {
        if ($req->session()->has('user')){
            $cart= new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect('/');
    }
    else{
        return redirect('/login');
    }
    }
    public static function cartItem()
    {
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }
}
