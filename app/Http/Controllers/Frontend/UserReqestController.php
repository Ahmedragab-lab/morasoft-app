<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Service;
use App\Models\User;
use App\Models\UserReqest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserReqestController extends Controller
{
    //ajax request from  front page price ask ================================\\//
    public function sendrequest(Request $request){
         $from = $request->input('from');
         $to = $request->input('to');
         $service_id = $request->input('serv_id');
         $sms = $request->input('sms');
        if(Auth::check()){
            $serv_check = Service::where('id',$service_id);
            if($serv_check){
                $req = new UserReqest();
                $req->name =auth()->user()->fname;
                $req->email = auth()->user()->email;
                $req->address = auth()->user()->address1;
                $req->from_id =  $from;
                $req->to_id = $to;
                $req->user_id = Auth::id();
                $req->service_id = $service_id;
                $req->sms = $sms;
                $req->save();
                return response()->json(['status'=>$req->name . ' request submitted successfully']);

                // $user = User::get();
                // $order = UserReqest::latest()->first();
                // $user->notify(new \App\Notifications\Add_service_Order($order));
            }
        }else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
 //End ajax request from  front page price ask ================================\\//
  //ajax request from  service page price ask ================================\\//
  public function servrequest(Request $request){
    $from = $request->input('from');
    $to = $request->input('to');
    $service_id = $request->input('serv_id');
    $sms = $request->input('sms');
   if(Auth::check()){
       $serv_check = Service::where('id',$service_id);
       if($serv_check){
           $req = new UserReqest();
           $req->name =auth()->user()->fname;
           $req->email = auth()->user()->email;
           $req->address = auth()->user()->address1;
           $req->from_id =  $from;
           $req->to_id = $to;
           $req->user_id = Auth::id();
           $req->service_id = $service_id;
           $req->sms = $sms;
           $req->save();
           return response()->json(['status'=>$req->name . ' request submitted successfully']);

           // $user = User::get();
           // $order = UserReqest::latest()->first();
           // $user->notify(new \App\Notifications\Add_service_Order($order));
       }
   }else{
       return response()->json(['status'=>'Login to continue']);
   }
}
  //End ajax request from  service page price ask ================================\\//
    //ajax request from  products page addtocart ================================\\//
    public function addtocart(Request $request){
        $product_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        if(Auth::check()){
            $prod_check = Product::where('id',$product_id)->first();
            if($prod_check){
                if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                    return response()->json(['status'=> ' Already added to cart']);
                }else{
                    $cart = new Cart();
                    $cart->product_id =  $product_id;
                    $cart->product_qty = $product_qty;
                    $cart->user_id = Auth::id();
                    $cart->save();
                    return response()->json(['status'=>$prod_check->product_name . ' Added to cart successfully']);
                }
            }
        }else
        {
            return response()->json(['status'=>'Login to continue']);
        }
    }
    //ajax request from  my cart page delete item from cart ================================\\//
    public function delete_item(Request $request){
        $product_id = $request->input('prod_id');
        if(Auth::check()){
            if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists()){
                $cart = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cart->delete();
                return response()->json(['status'=>' product deleted successfully']);
            }
        }else{
            return response()->json(['status'=>'Login to continue']);
        }
    }
   // End ajax request from  my cart page delete item from cart ================================\\//
   // update quantity from my cart page by ajax ================================\\//
    public function update_qty(Request $request){
        $product_id = $request->input('prod_id');
        $product_qty = $request->input('prod_qty');
        // $prod_price = $request->input('prod_price');
        // $product_tax = $request->input('cart_tax');
        // $product_total = $request->input('cart_total');
        if(Auth::check())
        {
            if(Cart::where('product_id',$product_id)->where('user_id',Auth::id())->exists())
            {
                $cart = Cart::where('product_id',$product_id)->where('user_id',Auth::id())->first();
                $cart->product_qty = $product_qty;
                // $cart->product_price = $prod_price;
                // $cart->tax = $product_tax;
                // $cart->total = $product_total;
                $cart->update();
                return response()->json(['status'=>' Quantity updated successfully']);
            }
        }
     }
   // End update quantity from my cart page by ajax ================================\\//


}
