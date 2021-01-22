<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminCategoryController extends Controller
{
    /**
     * 显示
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function show()
    {
        $datas = DB::table('categorys')->paginate(2);
        return view('admin.categorys',['datas'=>$datas]);
    }
    public function new()
    {
        return view('admin.categorysNew');
    }

    public function create(Request $request)
    {
        $name = $request->input('name');
       
        /**校验邮箱是否已存在 */
        $exists = DB::table('categorys')->where('name', $name)->exists();

        if($exists){
            return redirect()->intended('/admin/categorys/new');
        }
        $user = DB::table('categorys')->insert([
            'name' => $name,
        ]);
        return redirect()->intended('/admin/categorys');
    }
}
