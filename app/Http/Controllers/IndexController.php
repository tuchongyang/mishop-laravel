<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class IndexController extends Controller
{
    /**
     * 显示指定用户的简介
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $user = Auth::user();
        return view('web.index',['user'=>$user]);
    }
    public function category()
    {
        $user = Auth::user();
        $latestPosts = DB::table('goods');
        $datas = DB::table('categorys')
                ->join('goods', function ($join) {
                    $join->on('categorys.id', '=', 'goods.category_id');
                })
                ->get();
                    // ->joinSub($latestPosts, 'latest_posts', function ($join) {
                    //     $join->on('categorys.id', '=', 'latest_posts.category_id');
                    // })->get();

        return view('web.category',['user'=>$user,'datas'=>$datas]);
    }
    public function productDetail()
    {
        $user = Auth::user();
        return view('web.product_detail',['user'=>$user]);
    }
}
