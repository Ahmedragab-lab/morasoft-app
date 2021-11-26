<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Models\contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail as FacadesMail;
use Mail;

class ContactController extends Controller
{


        public function contact(){
            return view('contact-us');
        }
        public function sendEmail(Request $request){
            $datalis=[
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'message' => $request->message,
            ];
            FacadesMail::to('tayar.shaeby@gmail.com')->send(new ContactMail($datalis));
            return back()->with('message_sent','Your Message has been sent successfully!');
        }


    public function index()
    {
      //  return view('site.pages.contactus');
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }

    public function show()
    {
         return view('site.pages.contactus');
        // return 'aaa';
    }



}
