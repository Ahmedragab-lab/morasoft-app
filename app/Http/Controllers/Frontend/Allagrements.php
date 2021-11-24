<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Agreement;


use Illuminate\Http\Request;

class Allagrements extends Controller
{
    public function index(){

       }

    public function show($id)
    {
        $Last_agreement = Agreement::find($id);
        $agreements =Agreement::orderBy('id','DESC')->get();

        return view('site.pages.last_agre',compact('Last_agreement','agreements'));
    }


}
