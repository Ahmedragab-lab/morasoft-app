<?php

namespace App\Http\Controllers\Frontend;
use App\Http\Controllers\Controller;
use App\Models\UserReqest;
use Illuminate\Http\Request;

class UserReqestController extends Controller
{
    public function sendrequestx(Request $request)
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
            // $input = $request->all();
            // UserReqest::create($input);
            // return response()->json(['success'=>'Ajax request submitted successfully']);
            // return response()->json([
            //     "status" => true,
            //     "data" => $input
            // ]);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }


    }
    public function servrequest(Request $request)
    {
        try {
            // $validated = $request->validated();
            $data = new UserReqest();
            $data->name =$request->name ;
            $data->email = $request->email;
            $data->address = $request->subject;
            $data->service_id = $request->serv_id;
            $data->sms = $request->sms;
            $data->save();
            // $data = $request->all();
            // UserReqest::create($data);
            return response()->json(['success'=>'Ajax request submitted successfully']);
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }

        public function sendrequest(Request $request){
            $req = new UserReqest();
            $req->name =$request->input('name') ;
            $req->email = $request->input('email');
            $req->address = $request->input('subject');
            $req->service_id = $request->input('serv_id');
            $req->sms = $request->input('sms');
            $req->save();
             return response()->json(['status'=>$req->name . ' request submitted successfully']);
            //  return response()->json(['success'=>'Ajax request submitted successfully']);
        }

}
