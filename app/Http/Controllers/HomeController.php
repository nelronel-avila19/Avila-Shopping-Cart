<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\Product;
use App\CartItem;
use Auth;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $cartItems = DB::table('cart_items')
        ->join('products', 'products.id', '=', 'cart_items.product_id')
        ->get();
        // echo $products;
        // echo $cartItems;
        return view('home', compact('products', 'cartItems'));
    }

     public function addToCart(Request $request, $productId)
    {
       $user_id = Auth::user()->id;
       // echo $user_id;-z

       $cartId = DB::table('carts')->where('user_id', $user_id)->value('id');
       // echo $cartId;

       $product_price = DB::table('products')->where('id', $productId)->value('price');
       
       $product_barcode = DB::table('products')->where('id', $productId)->value('barcode');
       
       $exist = DB::table('cart_items')->where('product_id', $productId)->get();
       // echo $exist;

       if ($exist != "[]"){
            // echo "nahanap lodi!";
            DB::table('cart_items')->where('product_id', $productId)->increment('quantity');
            $quantity = DB::table('cart_items')->where('product_id', $productId)->value('quantity');
            $amount = $quantity * $product_price;
            DB::table('cart_items')->where('product_id', $productId)->update([ 'amount' => $amount ]);

       }
       if ($exist == "[]"){
            // echo "wala werpa!";
           $cart_item = new CartItem;
           $cart_item->cart_id = $cartId;
           $cart_item->product_id = $productId;
           $cart_item->quantity = 1;
           $cart_item->amount = $product_price;
           $cart_item->barcode = $product_barcode;
           $cart_item-> save();
       }

        return redirect('/home');
    }
    // public function viewCart()
    // {
    //     $view = DB::table('cart_items')->all()->get();

    //     return view('\home', $view);
        
        
    // }
}
