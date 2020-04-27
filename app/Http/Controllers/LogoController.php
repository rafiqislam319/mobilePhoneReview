<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\logo;
use Intervention\Image\Facades;

class LogoController extends Controller
{
    public function index(){
        return view('admin.logo.logoAdd');
    }
    public function logoSave(Request $request){
        if ($request->hasFile('file')) {
            foreach ($request->file as $file){
                $fileName = $file->getClientOriginalName();

                $destinationPath = public_path('/uploads/images');  //try
                //$file->storeAs('public/uploads/logos', $fileName);
                $file->move($destinationPath, $fileName);   //try

                //$data[] = $fileName;


                $fileInfo = new logo();

                //$fileInfo->file_name=json_encode($data);


                $fileInfo->logo_name = $request->logo_name;
                //$fileInfo->file_name = $fileName;
                $fileInfo->publication_status = $request->publication_status;
                $data[] = $fileName;
                $fileInfo->file_name=json_encode($data);
                $fileInfo->save();
            }
            return redirect('logo/add')->with('success', 'Logo save Successfully');
        }
        //return $request->all();

    }
    public function logoManage(){
        $logoInfo = logo::all();
        return view('admin.logo.manageLogo', ['logoInfo'=>$logoInfo]);
    }
    public function logoUnPublished($id){
        $logo = logo::find($id);
        $logo->publication_status = 0;
        $logo->save();
        return redirect('logo/manage')->with('success', 'Logo Unpublished Successfully');
    }
    public function logoPublished($id){
        $logo = logo::find($id);
        $logo->publication_status = 1;
        $logo->save();
        return redirect('logo/manage')->with('success', 'Logo Published Successfully');
    }
    public function logoDelete($id){
        $logo = logo::find($id);
        $logo->delete();
        return redirect('logo/manage')->with('success', 'Logo Deleted Successfully');
    }
    public function logoEdit($id){
        $logo = logo::find($id);
        return view('admin.logo.editLogo', ['logo'=>$logo]);
    }
    public function logoUpdate(Request $request){
        $logo = logo::find($request->logo_id);
        $logo->logo_name = $request->logo_name;
        $logo->publication_status = $request->publication_status;
        $logo->save();
        return redirect('logo/manage')->with('success', 'Logo Updated Successfully');
    }
}
