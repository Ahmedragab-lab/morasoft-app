<?php

namespace App\Http\Controllers\Frontend;

use App\Models\UserRate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class UserRateController extends Controller
{

    public function addrate(Request $request)
    {
        $rate = new UserRate();
        $rate->user_id = $request->user_id;
        $rate->service_id = $request->service_id;
        $rate->star = $request->rate;
        $rate->save();
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
     * @param  \App\Models\UserRate  $userRate
     * @return \Illuminate\Http\Response
     */
    public function show(UserRate $userRate)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserRate  $userRate
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRate $userRate)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserRate  $userRate
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRate $userRate)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserRate  $userRate
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserRate $userRate)
    {
        //
    }
}
