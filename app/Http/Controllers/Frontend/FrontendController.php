<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\Event;
use App\Models\Feedback;
use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\navbar_details;
use App\Models\Product;

class FrontendController extends Controller
{



    public function index()
    {
        
        $servs = Service::orderBy('id','DESC')->limit(4)->get();
        $products = Product::orderBy('id','DESC')->limit(4)->get();
        $services = Service::orderBy('id','DESC')->limit(3)->get();
        $allservices = Service::orderBy('id','DESC')->get();
        $feedbacks = Feedback::orderBy('id','DESC')->limit(6)->get();
        $events=Event::all()->last();
        $Last_service = Service::orderBy('id','DESC')->first();
        $Last_agreement=Agreement::orderBy('id','DESC')->first();
        return view('/front',compact('servs','services','feedbacks','events','Last_service','Last_agreement','allservices','products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('site.pages.product-details',compact('product'));
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
