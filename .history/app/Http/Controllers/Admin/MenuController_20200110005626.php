<?php

namespace App\Http\Controllers\Admin;
use DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ServicesController extends Controller
{
    public function menuContent() 
    {
        return view('site.index');
    }

    
    
}
