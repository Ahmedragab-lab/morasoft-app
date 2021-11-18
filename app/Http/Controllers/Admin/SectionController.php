<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class SectionController extends Controller
{

    public function index()
    {
        $sections = Section::all();
        return view('Admin.sections.index',compact('sections'));
    }


    public function create()
    {
        return view('Admin.sections.create');
    }


    public function store(Request $request)
    {
        try {
            $section = new Section();
            if($request->hasfile('image')){
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time().'.'.$ext;
                $file->move('uploads/section/', $filename);
                $section->image = $filename;
            }
            $section->section_name = ['en'=>$request->section_name_en ,'ar'=>$request->section_name];
            $section->slug = $request->slug;
            $section->desc = $request->desc;
            $section->status = $request->status==true?'1':'0';
            $section->popular = $request->popular==true?'1':'0';
            // $section->meta_title = $request->meta_title;
            // $section->meta_disc = $request->meta_disc;
            // $section->meta_keywords = $request->meta_keywords;
            $section->save();
            toastr()->success(__('section create successfully'));
            return redirect()->route('sections.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show(section $section)
    {
        //
    }


    public function edit($id)
    {
        $section=Section::find($id);
        return view('Admin.sections.edit',compact('section'));
    }


    public function update(Request $request, $id)
    {
        try{
            $section = Section::find($id);
            if($request->hasFile('image')){
                $path = 'uploads/section/' . $section->image;
                if(File::exists($path)){
                    File::delete($path);
                }
                $file = $request->file('image');
                $ext  = $file->getClientOriginalExtension();
                $filename = time() . '.' . $ext ;
                $file->move('uploads/section',$filename);
                $section->image = $filename;
            }
            $section->section_name = ['en'=>$request->section_name_en ,'ar'=>$request->section_name];
            $section->slug = $request->slug;
            $section->desc = $request->desc;
            $section->status = $request->status==true?'1':'0';
            $section->popular = $request->popular==true?'1':'0';
            // $section->meta_title = $request->meta_title;
            // $section->meta_disc = $request->meta_disc;
            // $section->meta_keywords = $request->meta_keywords;
            $section->update();
            toastr()->success(__('sections update successfully'));
            return redirect()->route('sections.index');
        }
        catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function destroy($id)
    {
    try{
        $section = Section::find($id);
        if($section->image){
            $path = 'uploads/section/' . $section->image;
            if(File::exists($path)){
                File::delete($path);
            }
        }
        $section->delete();
        toastr()->error(__('section delete successfully'));
        return redirect()->route('sections.index');
    }catch (\Exception $e){
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
