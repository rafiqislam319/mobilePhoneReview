<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;


class categoryController extends Controller
{
    public function addCategory(){
        return view('admin.category.addCategory');
    }
    public function saveCategory(Request $request){
        $categories = new Category();
        $categories->category_name = $request->category_name;
        $categories->category_description = $request->category_description;
        $categories->publication_status = $request->publication_status;
        $categories->save();
        return redirect('category/add')->with('success', 'Category Info save Successfully');
    }
    protected function manageCategory(){
        $categories = Category::all();
        return view('admin.category.manageCategory',['categories'=>$categories]);
    }
    public function unpublishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 0;
        $category->save();
        return redirect('category/manage')->with('success', 'Category Info Unpublished Successfully');
    }
    public function publishedCategory($id){
        $category = Category::find($id);
        $category->publication_status = 1;
        $category->save();
        return redirect('category/manage')->with('success', 'Category Info Published Successfully');
    }
    public function editCategory($id){
        $category = Category::find($id);
        return view('admin.category.edit-category', ['category'=>$category]);
    }
    public function updateCategory(Request $request){
        $categories = Category::find($request->category_id);
        $categories->category_name = $request->category_name;
        $categories->category_description = $request->category_description;
        $categories->publication_status = $request->publication_status;
        $categories->save();
        return redirect('category/add')->with('success', 'Category Info Updated Successfully');
    }
    public function deleteCategory($id=null){
        $category = Category::find($id);
            $category->delete();


        return redirect('category/manage')->with('success', 'Category Deleted Successfully');
    }
}
