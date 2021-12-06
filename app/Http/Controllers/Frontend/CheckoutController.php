<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckoutController extends Controller
{

    public function index()
    {
        $cartitems= Cart::where('user_id',Auth::id())->get();
        return view('site.pages.checkout',compact('cartitems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }


    public function store(Request $request)
    {
        DB::beginTransaction();

        try
        {
            // $users = User::get();
            // foreach ($users as $user) {
            //     $ids[] = $user->id;
            // }
            // if(Order::whereNotIn('order_id',$ids )){
                // $order = Order::whereNotIn('order_id',$ids )->get();
                // $order = Order::where('order_id',Auth::id() )->exists();
            $exist = Order::where('order_id',Auth::id())->first();
            if($exist){
                return redirect()->back()->with('status',"you are already order bafore");
            }else{
                $order = new Order();
                $order->order_id = Auth::id();
                $order->fname = $request->fname;
                $order->lname = $request->lname;
                $order->email = $request->email;
                $order->phone = $request->phone;
                $order->address1 = $request->address1;
                $order->address2 = $request->address2;
                $order->city = $request->city;
                $order->country = $request->country;
                $order->tracking_no = 'morasoft'.rand(1000000000, 9999999999);
                $order->save();
            }
                $cartitems= Cart::where('user_id',Auth::id())->get();
                foreach($cartitems as $item){
                    OrderItem::create([
                        'order_id'=> $order->id,
                        'prod_id'=> $item->product_id,
                        'qty'=> $item->product_qty,
                        'price'=> $item->product->selling_price,
                        'priceqty'=>$item->sum,
                        'priceqtytax'=>$item->tax,
                        'total'=>$item->sum + $item->tax,
                    ]);
                    $product = Product::where('id',$item->product_id)->first();
                    $product->qty = $product->qty - $item->product_qty;
                    $product->update();
                }
                if(Auth::user()->address1 == NULL){
                    $user = User::where('id',Auth::id())->first();
                    $user->fname = $request->fname;
                    $user->lname = $request->lname;
                    $user->phone = $request->phone;
                    $user->address1 = $request->address1;
                    $user->address2 = $request->address2;
                    $user->city = $request->city;
                    $user->country = $request->country;
                    $user->update();
                }
                $cartitems= Cart::where('user_id',Auth::id())->get();
                Cart::destroy($cartitems);
                DB::commit();
                return redirect()->back()->with('status',"your order done");

        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
