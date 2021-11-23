<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Event;

use Illuminate\Http\Request;

class Allevents extends Controller
{
    public function index(){
        $events = Event::all();
        return view('site.pages.allevents',compact('events'));
       }

    public function show($id)
    {
        $Last_event = Event::find($id);
        return view('site.pages.allevents',compact('Last_event'));
    }
}
