<?php

namespace App\Http\Controllers\Frontend;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserReqest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Notification;

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
    //   auth()->user()->notifications()->where('id', $id)->delete();
    //   Notification::where('data[order_no]',$order->order->order_no)->delete();
    DB::table('notifications')->where('data->order_no',$order->order->order_no)->delete();
    //   $userReq = UserReqest::where('user_id',Auth::id())->get();
    //   UserReqest::destroy($userReq);
      return response()->json(['status'=> ' order submitted successfully']);
    //   return redirect()->route('front.index')->response()->json(['status'=> ' order submitted successfully']);
    }


    public function show($id)
    {
        $order_details = UserReqest::where('id',$id)->first();
<<<<<<< HEAD
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
=======

        return view('site.pages.order-details',compact('order_details'));
    }


    public function showstep($id)
    {
        $order_step = OrderDetail::where('order_id',$id)->first();
        return view('site.pages.order-steps',compact('order_step'));
>>>>>>> master
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
