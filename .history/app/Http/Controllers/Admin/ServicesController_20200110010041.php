<?php

namespace App\Http\Controllers\Admin;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function createcategory() 
    {
        return view('admin.services.create-category');
    }

    public function savecategory(Request $request) 
    {
        $categoryname = $request->input('categoryname');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('categoryname'=>$categoryname,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('servisecategories')->insert($data);
        return redirect('/create-category')->with('status', 'Category Created');
    }

    public function categoryList() 
    {
        $category = DB::select('select * from servisecategories');
        return view('admin.services.category-list',['category'=>$category]);
    }

    public function deletecategory(Request $request, $id) 
    {
        DB::delete('delete from servisecategories where id = ?',[$id]);
        return redirect('/category-list')->with('status', 'Category Deleted Succesfully');
    }

    public function categoryedit(Request $request, $id) 
    {
        $category = DB::select('select * from servisecategories where id = ?',[$id]);
        return view('admin.services.category-edit',['category'=>$category]);
    }

    public function updatecategory(Request $request, $id) 
    {
        $categoryname = $request->input('categoryname');
        $status = $request->input('status');
        $updated_at = new \DateTime();
        DB::update('update servisecategories set categoryname = ?,status=?,updated_at=? where id = ?',[$categoryname,$status,$updated_at,$id]);
        return redirect('/category-list')->with('status', 'Category Updated Succesfully');
    }

    //Sub Categories

    public function createsubcategory() 
    {
        return view('admin.services.create-subcategory');
    }

    public function savesubcategory(Request $request) 
    {
        $subcategoryname = $request->input('categoryname');
        $status = $request->input('status');
        $created_at = new \DateTime();
        $updated_at = new \DateTime();
        $data=array('categoryname'=>$categoryname,'status'=>$status, 'created_at'=>$created_at, 'updated_at'=>$updated_at);
        DB::table('servisecategories')->insert($data);
        return redirect('/create-category')->with('status', 'Category Created');
    }
    
}
