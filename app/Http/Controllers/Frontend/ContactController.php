<?php

namespace App\Http\Controllers\Frontend;

use App\Events\EmailNotification;
use App\Http\Controllers\Controller;
use App\Models\contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {

        $contacts = contact::all();


        return view('site.pages.contact',compact('contacts'));
    }

    public function contact(Request $request)
    {
       $userid = $request->input('userid');
       $sms = $request->input('sms');
       $contact = new Contact();
       $contact->user_id = $userid;
       $contact->sms =$sms;
       $contact->save();

       $data=[
         'user_id'=>$userid,
         'sms'=>$sms,
       ];
       event(new EmailNotification($data));
       return response()->json(['status'=> ' Email submitted successfully']);
    }



}
