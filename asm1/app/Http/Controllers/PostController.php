<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function all()
    {
        $data = DB::table("posts")->get();
        return $data;
    }

    public function useForIndex()
    {
        $tinHot = DB::table('posts')
            ->where('date_of_post', '>=', now()->subDays(7))
            ->orderBy('view', 'desc')
            ->first();

        $tinMoi = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->orderBy('date_of_post', 'desc')
            ->take(4)
            ->get();

        // dd($tinHot);

        $tinKhac = DB::table('posts')
            ->orderBy('view', 'desc')
            ->offset(1)
            ->take(3)
            ->get();
        return view('index', compact('tinHot', 'tinMoi', 'tinKhac'));
    }

    public function postChiTiet($id)
    {
        $ctTin = DB::table('posts')
            ->find($id);
        return view('chitiettin', compact('ctTin'));
        // dd($ctTin);

    }
    public function listTin($id)
    {
        $tins = DB::table('posts')
            ->where('category_id', $id)
            ->get();

        $loaitin = DB::table('posts')
            ->join('categories', 'posts.category_id', '=', 'categories.id')
            ->get();

        return view('tintrongloai', compact('tins', 'loaitin'));
    }
    public function  postSearch(Request $request)  {
        $loai = DB::table('posts')
        ->where('title','LIKE','%'.$request
        ->input('key').'%')
        ->get();
       return view('client.timkiem',['loai'=>$loai,'tenLoai'=>'Kết quả tìm kiếm :']);
    }
}
