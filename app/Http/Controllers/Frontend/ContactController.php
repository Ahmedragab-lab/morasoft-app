<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Models\contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function contact()
    {
      //  return view('site.pages.contactus');
       // return 'aaaaaaaaaaa';
    }


    public function index()
    {
        return view('site.pages.contactus');
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
