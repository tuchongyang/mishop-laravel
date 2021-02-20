<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Good;

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
        $datas = Category::with('goods')->get();
        return view('web.index',['user'=>$user,'datas'=>$datas]);
    }
    public function category()
    {
        $user = Auth::user();
        $datas = Category::with('goods')->get();

        return view('web.category',['user'=>$user,'datas'=>$datas]);
    }
    public function productDetail(Request $request)
    {
        $id = $request->input('id');
        $data = Good::where('id','=',$id)->first();
        return view('web.product_detail',['data'=>$data]);
    }
}
