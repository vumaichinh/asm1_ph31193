<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class LoaiTinController extends Controller
{
    //
    public function listLoaiTin(){
        $loaiTin = DB::table("categories")->get();
        return view("client.layouts.partials.nav",compact("loaiTin"));
    }
   
}
