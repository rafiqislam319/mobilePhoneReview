<?php

namespace App\Http\Controllers;

use App\Brand;
use Illuminate\Http\Request;



class BrandController extends Controller
{
    public function index(){
        return view('admin.brand.addBrand');
    }
    public function saveBrandInfo(Request $request){
        $brand = new Brand();
        $brand->brand_name  = $request->brand_name;
        $brand->brand_description  = $request->brand_description;
        $brand->publication_status  = $request->publication_status;
        $brand->save();
        //Brand::create($request->all());
        return redirect('/brand/add')->with('success', 'Brand Info save Successfully');
    }
    public function brandManage(){
        $brands = Brand::all();
        return view('admin.brand.manageBrand', ['brands'=>$brands]);
    }
    public function unpublishBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 0;
        $brand->save();
        return redirect('brand/manage')->with('success', 'Brand Unpublished Successfully');
    }
    public function publishedBrand($id){
        $brand = Brand::find($id);
        $brand->publication_status = 1;
        $brand->save();
        return redirect('brand/manage')->with('success', 'Brand Published Successfully');
    }
    public function editBrand($id){
        $brand = Brand::find($id);
        return view('admin.brand.editBrand', ['brand'=>$brand]);
    }
    public function updateBrand(Request $request){
        $brand = Brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->publication_status = $request->publication_status;
        $brand->save();
        return redirect('brand/manage')->with('success', 'Brand Updated Successfully');
    }
    public function deleteBrand($id){
        $brand = Brand::find($id);
        $brand->delete();
        return redirect('brand/manage')->with('success', 'Brand deleted Successfully');
    }
}
