<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Traits\AttachFilesTrait;
use App\Models\Setting;
use Illuminate\Http\Request;
use Spatie\Valuestore\Valuestore;



class SettingController extends Controller
{

      use AttachFilesTrait;

    public function index(){

        $collection = Setting::all();
        $setting['setting'] = $collection->flatMap(function ($collection) {
            return [$collection->key => $collection->value];
        });
         return view('Admin.setting.index', $setting);

     //   return view('Admin.setting.index',compact('setting'));

           // return 'aaaaaaaaaaa';
    }

    public function update(Request $request){

        try{
            $info = $request->except('_token', '_method', 'logo');
            foreach ($info as $key=> $value){
                Setting::where('key', $key)->update(['value' => $value]);
            }

//            $key = array_keys($info);
//            $value = array_values($info);
//            for($i =0; $i<count($info);$i++){
//                Setting::where('key', $key[$i])->update(['value' => $value[$i]]);
//            }

            // if($request->hasFile('logo')) {
            //     $logo_name = $request->file('logo')->getClientOriginalName();
            //     Setting::where('key', 'logo')->update(['value' => $logo_name]);
            //     $this->uploadFile($request,'logo','logo');
            // }

            toastr()->success(trans('messages.Update'));
            return back();
        }
        catch (\Exception $e){

            return redirect()->back()->with(['error' => $e->getMessage()]);
        }

    }

    private function generateCache()
    {
        $settings = Valuestore::make(config_path('settings.json'));
        Setting::all()->each(function ($item) use ($settings) {
            $settings->put($item->key, $item->value);
        });
    }

}
