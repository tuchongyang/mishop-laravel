<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

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
        return view('web.category',['user'=>$user]);
    }
    public function productDetail()
    {
        $user = Auth::user();
        return view('web.product_detail',['user'=>$user]);
    }
}
