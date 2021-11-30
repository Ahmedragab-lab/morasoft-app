<?php

namespace App\Http\Controllers\Frontend;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserReqest;
use Illuminate\Support\Facades\Auth;

class OrderDetailController extends Controller
{

    public function index()
    {
        //
    }

    public function order_details(Request $request)
    {
      $order_id = $request->input('orderid');
      $tax = $request->input('tax');
      $total = $request->input('total');

      $order = new OrderDetail();
      $order->order_id =  $order_id;
      $order->tax =  $tax;
      $order->total =  $total;
      $order->save();
    //   $userReq = UserReqest::where('user_id',Auth::id())->get();
    //   UserReqest::destroy($userReq);
      return response()->json(['status'=> ' order submitted successfully']);
    }


    public function show($id)
    {
        $order_details = UserReqest::where('id',$id)->first();
        return view('site.pages.order-details',compact('order_details'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\OrderDetail  $orderDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
