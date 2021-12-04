<?php

namespace App\Http\Controllers\Frontend;

<<<<<<< HEAD
use App\Http\Controllers\Controller;
use App\Models\contact;
use App\Models\Setting;
=======
use App\Events\EmailNotification;
use App\Http\Controllers\Controller;
use App\Models\contact;
>>>>>>> master
use Illuminate\Http\Request;

class ContactController extends Controller
{
<<<<<<< HEAD


=======
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
>>>>>>> master
    public function index()
    {

        $contacts = contact::all();

<<<<<<< HEAD

        return view('site.pages.contact',compact('contacts'));
    }

  

    public function contact(Request $request)
    {
        $userid = $request->input('userid');
        $sms = $request->input('sms');
=======
        return view('site.pages.contact',compact('contacts'));
    }

    public function contact(Request $request)
    {
       $userid = $request->input('userid');
       $sms = $request->input('sms');
>>>>>>> master
       $contact = new Contact();
       $contact->user_id = $userid;
       $contact->sms =$sms;
       $contact->save();
<<<<<<< HEAD

=======
       $data=[
         'user_id'=>$userid,
         'sms'=>$sms,
       ];
       event(new EmailNotification($data));
>>>>>>> master
       return response()->json(['status'=> ' Email submitted successfully']);
    }


<<<<<<< HEAD

=======
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
>>>>>>> master
    public function edit($id)
    {
        //
    }

<<<<<<< HEAD

=======
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
>>>>>>> master
    public function update(Request $request, $id)
    {
        //
    }

<<<<<<< HEAD
=======
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
>>>>>>> master
    public function destroy($id)
    {
        //
    }
}
