<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class Allservices extends Controller
{
    public function index(){
        $services = Service::all();
        return view('allservices',compact('services'));
       }
}
