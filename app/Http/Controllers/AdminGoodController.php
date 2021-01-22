<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AdminGoodController extends Controller
{
    /**
     * 显示
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('admin.goods');
    }
    public function new()
    {
        return view('admin.goodsNew');
    }
}
