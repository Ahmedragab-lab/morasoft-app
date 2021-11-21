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
    public function sendrequest(Request $request){
         $service_id = $request->input('serv_id');
        if(Auth::check()){
            $serv_check = Service::where('id',$service_id);
            if($serv_check){
                $req = new UserReqest();
                $req->name =auth()->user()->name;
                $req->email = auth()->user()->email;
                $req->address = auth()->user()->address;
                $req->user_id = Auth::id();
                $req->service_id = $request->input('serv_id');
                $req->sms = $request->input('sms');
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
}
