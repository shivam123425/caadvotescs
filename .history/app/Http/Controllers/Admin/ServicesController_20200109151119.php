<?php

namespace App\Http\Controllers\Admin;
use app\Models\Services;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function createcategory() 
    {
        return view('admin.services.create-category');
    }

    /*public function savecategory(Request $request) 
    {
        $categoryname = $request->input('category-name');
        $status = $request->input('status');
        $data=array('category-name'=>$categoryname,"status"=>$status);
        DB::table('servisecategories')->insert($data);
        return view('admin.services.create-category');
    }*/

    public function savecategory() {
        $category = new Services;

        $category->title = $request->input('title');

        $menuContent->save();
        return redirect('/create-menu')->with('status', 'Data Added');
    }
}
