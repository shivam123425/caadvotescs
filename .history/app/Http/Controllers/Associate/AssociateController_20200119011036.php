<?php

namespace App\Http\Controllers\Associate;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AssociateController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:associate');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $category = DB::select('select * from servisecategories WHERE status = "active"');
        $subcategory = DB::select('select * from subcategories where status = "active"');
        $services = DB::select('select * from services where status = "active"');
        return view('associate.index')->with(compact('category', 'subcategory', 'services'));
    }
}
