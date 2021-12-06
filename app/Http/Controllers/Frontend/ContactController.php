<?php

namespace App\Http\Controllers\Frontend;

use App\Events\EmailNotification;
use App\Http\Controllers\Controller;
use App\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $contacts = contact::all();

        return view('site.pages.contact',compact('contacts'));
    }

    public function contact(Request $request)
    {
       $userid = $request->input('userid');
       $name = $request->input('name');
       $sms = $request->input('sms');
       $contact = new Contact();
       $contact->user_id = $userid;
       $contact->name = $name;
       $contact->sms =$sms;
       $contact->save();
       $data=[
         'user_id'=>$userid,
         'sms'=>$sms,
       ];
       event(new EmailNotification($contact));
       return response()->json(['status'=> ' Email submitted successfully']);
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
