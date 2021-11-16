<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\UserReqest;
use Illuminate\Http\Request;

class UserReqestController extends Controller
{
    public function sendrequest(Request $request)
    {
        try {
            // $validated = $request->validated();
            // $req = new UserReqest();
            // $req->name =$request->name ;
            // $req->email = $request->email;
            // $req->address = $request->subject;
            // $req->service_id = $request->serv_id;
            // $req->sms = $request->sms;
            // $req->save();
            $input = $request->all();
            UserReqest::create($input);
            // return response()->json(['success'=>'Ajax request submitted successfully']);
            return response()->json([
                "status" => true,
                "data" => $input
            ]);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }

}
