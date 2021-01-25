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
    public function show(Request $request)
    {
        $name = $request->input('name');
        $datas = DB::table('categorys')
                    ->where('name','like','%'.$name.'%')
                    ->paginate(10)
                    ->appends($request->all());
        
        return view('admin.categorys',['datas'=>$datas]);
    }
    public function new()
    {
        return view('admin.categorysNew');
    }

    public function save(Request $request)
    {
        $name = $request->input('name');
       
        /**校验名称是否已存在 */
        $exists = DB::table('categorys')->where('name', $name)->exists();

        if($exists){
            return redirect()->intended('/admin/categorys/new')->with(['status'=>'danger','message'=>'名称已存在!']);
        }
        $user = DB::table('categorys')->insert([
            'name' => $name,
        ]);
        return redirect()->intended('/admin/categorys')->with(['status'=>'success','message'=>'添加成功!']);
    }

    public function remove($id)
    {
        /**校验邮箱是否已存在 */
        $exists = DB::table('categorys')->where('id', $id)->delete();

        return $this->success(true);
    }
}
