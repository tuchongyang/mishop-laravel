<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * 显示指定用户的简介
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function ordershow()
    {
        $user = Auth::user();
        return view('web.user_order',['user'=>$user]);
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
