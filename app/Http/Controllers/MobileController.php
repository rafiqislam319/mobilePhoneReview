<?php

namespace App\Http\Controllers;

use App\Brand;
use App\Mobile;
use Illuminate\Http\Request;
use Image;
use DB;
use MongoDB\Driver\Session;

class MobileController extends Controller
{
    public function index(){
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.mobile.addMobile', ['brands' =>$brands]);
    }
    public function saveMobileInfo(Request $request){
//        if ($request->hasFile('file')){
//            foreach ($request->file as $file){
//                $fileName = $file->getClientOriginalName();
//                //$destinationPath = public_path('/uploads/images');
//                $destinationPath = 'images/';   //index file onusare jabe
//                $imageUrl = $destinationPath.$fileName;
//                $file->move($destinationPath, $fileName);
//
//                $mobiles = new Mobile();
//                //$mobiles->brand_id = $request->brand_id;        eta very basic way te save
//                $mobiles->file = $imageUrl;
//                $mobiles->save();
//                return 'success';

                if ($request->hasFile('file')){
                    foreach ($request->file as $file){
                        $fileName = $file->getClientOriginalName();
                        //$image_encod = base64_encode(file_get_contents($file));
                        //$destinationPath = public_path('/uploads/images');
                        $directory = 'Mobile-images/';
                        $imageUrl = $directory.$fileName;
                        $file->move($directory, $imageUrl);



                        $mobiles = new Mobile();
                        $mobiles->brand_id = $request->brand_id;
                        $mobiles->mobile_name = $request->mobile_name;
                        $mobiles->model = $request->model;
                        $mobiles->color = $request->color;
                        $mobiles->price = $request->price;
                        $mobiles->launch_date = $request->launch_date;
                        $mobiles->network_type = $request->network_type;
                        $mobiles->sim = $request->sim;
                        $mobiles->gprs = $request->gprs;
                        $mobiles->edge = $request->edge;
                        $mobiles->wlan = $request->wlan;
                        $mobiles->bluetooth = $request->bluetooth;
                        $mobiles->gps = $request->gps;
                        $mobiles->fm_radio = $request->fm_radio;
                        $mobiles->usb = $request->usb;
                        $mobiles->display_size = $request->display_size;
                        $mobiles->display_feature = $request->display_feature;
                        $mobiles->display_resolution = $request->display_resolution;
                        $mobiles->display_protection = $request->display_protection;
                        $mobiles->body_dimension = $request->body_dimension;
                        $mobiles->body_weight = $request->body_weight;
                        $mobiles->p_camera = $request->p_camera;
                        $mobiles->p_camera_feature = $request->p_camera_feature;
                        $mobiles->s_camera = $request->s_camera;
                        $mobiles->s_camera_feature = $request->s_camera_feature;
                        $mobiles->video_recording = $request->video_recording;
                        $mobiles->os = $request->os;
                        $mobiles->os_version = $request->os_version;
                        $mobiles->cpu = $request->cpu;
                        $mobiles->rom = $request->rom;
                        $mobiles->e_memory = $request->e_memory;
                        $mobiles->ram = $request->ram;
                        $mobiles->audio = $request->audio;
                        $mobiles->l_speaker = $request->l_speaker;
                        $mobiles->battery_type = $request->battery_type;
                        $mobiles->battery_capacity = $request->battery_capacity;
                        $mobiles->finger_print = $request->finger_print;
                        $mobiles->face_unlock = $request->face_unlock;
                        $mobiles->made_in = $request->made_in;
                        $mobiles->short_description = $request->short_description;
                        $mobiles->highlights = $request->highlights;
                        $mobiles->publication_status = $request->publication_status;

                        $mobiles->file = $imageUrl;
                        //$mobiles->file = $image_encod;
                        $mobiles->save();


            }
                    return redirect('mobilePhone/add')->with('success', 'Mobile Info Save Successfully');

        }
    }
    public function manageMobileInfo(){

        $mobiles = DB::table('mobiles')
                            ->join('brands', 'mobiles.brand_id', '=' ,'brands.id')
                            ->select('mobiles.*', 'brands.brand_name')
                            ->get();
        //return $mobiles;
        return view('admin.mobile.manageMobile',['mobiles' =>$mobiles]);
    }

    public function mobileDetails($id){
        $mobile = Mobile::where('id', $id)->first();
        return view('admin.mobile.mobileDetails', [
            'mobile' =>$mobile,
        ]);
    }


    public function editMobileInfo($id){
        $mobile = Mobile::find($id);
        $brands = Brand::where('publication_status', 1)->get();
        return view('admin.mobile.editMobile', [
                    'mobile' =>$mobile,
                    'brands' =>$brands
        ]);
    }

    protected function productBasicInfoUpdate($request, $mobiles){
        $mobiles->brand_id = $request->brand_id;
        $mobiles->mobile_name = $request->mobile_name;
        $mobiles->model = $request->model;
        $mobiles->color = $request->color;
        $mobiles->price = $request->price;
        $mobiles->launch_date = $request->launch_date;
        $mobiles->network_type = $request->network_type;
        $mobiles->sim = $request->sim;
        $mobiles->gprs = $request->gprs;
        $mobiles->edge = $request->edge;
        $mobiles->wlan = $request->wlan;
        $mobiles->bluetooth = $request->bluetooth;
        $mobiles->gps = $request->gps;
        $mobiles->fm_radio = $request->fm_radio;
        $mobiles->usb = $request->usb;
        $mobiles->display_size = $request->display_size;
        $mobiles->display_feature = $request->display_feature;
        $mobiles->display_resolution = $request->display_resolution;
        $mobiles->display_protection = $request->display_protection;
        $mobiles->body_dimension = $request->body_dimension;
        $mobiles->body_weight = $request->body_weight;
        $mobiles->p_camera = $request->p_camera;
        $mobiles->p_camera_feature = $request->p_camera_feature;
        $mobiles->s_camera = $request->s_camera;
        $mobiles->s_camera_feature = $request->s_camera_feature;
        $mobiles->video_recording = $request->video_recording;
        $mobiles->os = $request->os;
        $mobiles->os_version = $request->os_version;
        $mobiles->cpu = $request->cpu;
        $mobiles->rom = $request->rom;
        $mobiles->e_memory = $request->e_memory;
        $mobiles->ram = $request->ram;
        $mobiles->audio = $request->audio;
        $mobiles->l_speaker = $request->l_speaker;
        $mobiles->battery_type = $request->battery_type;
        $mobiles->battery_capacity = $request->battery_capacity;
        $mobiles->finger_print = $request->finger_print;
        $mobiles->face_unlock = $request->face_unlock;
        $mobiles->made_in = $request->made_in;
        $mobiles->short_description = $request->short_description;
        $mobiles->highlights = $request->highlights;
        $mobiles->publication_status = $request->publication_status;

        $mobiles->save();
    }


    public function updateMobileInfo(Request $request){
        $mobiles = Mobile::find($request->mobile_id);
        if ($request->hasFile('file')){
            foreach ($request->file as $file){
                unlink($mobiles->file);
                $fileName = $file->getClientOriginalName();
                $directory = 'Mobile-images/';
                $imageUrl = $directory.$fileName;
                $file->move($directory, $imageUrl);

                $mobiles->file = $imageUrl;
                $this->productBasicInfoUpdate($request, $mobiles);

            }
            //return 'yes';
        }else{
            $this->productBasicInfoUpdate($request, $mobiles);
            //return 'no';
        }
        return redirect('manage/MobileInfo')->with('success', 'Mobile Info Updated Successfully');

    }
    public function unPublishedMobileInfo($id){
        $mobile = Mobile::find($id);
        $mobile->publication_status = 0;
        $mobile->save();
        return redirect('manage/MobileInfo')->with('success', 'Mobile Info Unpublished Successfully');

    }
    public function publishedMobileInfo($id){
        $mobile = Mobile::find($id);
        $mobile->publication_status = 1;
        $mobile->save();
        return redirect('manage/MobileInfo')->with('success', 'Mobile Info Published Successfully');
    }
    public function deleteMobileInfo($id){
         Mobile::find($id)->delete();
        //$mobilePhone->delete();
        return redirect('manage/MobileInfo')->with('success', 'Mobile Info Deleted Successfully');
    }

}
