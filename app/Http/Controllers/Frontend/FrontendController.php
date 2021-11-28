<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agreement;
use App\Models\Company;
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
        $Last_agreement=Agreement::orderBy('id','DESC')->first();
        $Last_event=Event::orderBy('id','DESC')->first();

        // $events=Event::all()->last();
        // $Last_service = Service::orderBy('id','DESC')->first();
        // $servs = Service::orderBy('id','DESC')->limit(4)->get();
        // $allservices = Service::orderBy('id','DESC')->get();
        // $Last_comp=Company::orderBy('id','DESC')->first();
        // $allevents = Event::orderBy('id','DESC')->get();
        // $Last_product=Product::orderBy('id','DESC')->first();
        return view('/front',compact('Last_agreement','Last_event'));
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
