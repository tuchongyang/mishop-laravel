<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminGoodController extends Controller
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
        $datas = DB::table('goods')
                    ->where('goods.name','like','%'.$name.'%')
                    ->join('categories', 'goods.category_id', '=', 'categories.id')
                    ->select('goods.*','categories.name as category_name')
                    ->paginate(10)
                    ->appends($request->all());
        return view('admin.goods',['datas'=>$datas]);
    }
    public function new(Request $request)
    {
        if($request->isMethod('get')){
            $categories = DB::table('categories')->get();
            return view('admin.goodsNew',['categories'=>$categories]);
        }
        else{
            $name = $request->input('name');
            $category_id = $request->input('category_id');
            $description = $request->input('description');
            $pic = $request->input('pic');
            $price = $request->input('price');
            $sale_price = $request->input('sale_price');
            $content = $request->input('content');

            /**校验名称是否已存在 */
            $exists = DB::table('goods')->where('name', $name)->exists();

            if($exists){
                return redirect()->intended('/admin/goods/new')->with(['status'=>'danger','message'=>'名称已存在!']);
            }
       
            $data = DB::table('goods')->insert([
                'name' => $name,
                'category_id'=>$category_id,
                'description'=>$description,
                'pic'=>$pic,
                'price'=>$price,
                'sale_price'=>$sale_price,
                'content'=>$content
            ]);
            return redirect()->intended('/admin/goods')->with(['status'=>'success','message'=>'添加成功!']);
        }
        
    }
    public function edit(Request $request,$id=0)
    {
        if($request->isMethod('get')){
            $categories = DB::table('categories')->get();
            $data = DB::table('goods')->where('id',$id)->first();
            return view('admin.goodsEdit',['data'=>$data,'categories'=>$categories]);
        }
        else{
            $name = $request->input('name');
            $id = $request->input('id');
            /**校验名称是否已存在 */
            $exists = DB::table('goods')->where('name', $name)->where('id','<>',$id)->exists();

            if($exists){
                return redirect()->intended('/admin/goods/edit/'.$id)->with(['status'=>'danger','message'=>'名称已存在!']);
            }
            $user = DB::table('goods')->where('id',$id)
            ->update([
                'name' => $name,
            ]);
            return redirect()->intended('/admin/goods')->with(['status'=>'success','message'=>'修改成功!']);
        }
        
    }
    
    public function remove($id)
    {
        $exists = DB::table('goods')->where('id', $id)->delete();

        return $this->success(true);
    }
    public function editspec(Request $request,$id=0)
    {
        if($request->isMethod('get')){
            $data = DB::table('goods')->where('id',$id)->first();
            return view('admin.goodsEditSpec',['data'=>$data]);
        }
        else{
            $name = $request->input('name');
            $id = $request->input('id');
            /**校验名称是否已存在 */
            $exists = DB::table('goods')->where('name', $name)->where('id','<>',$id)->exists();

            if($exists){
                return redirect()->intended('/admin/goods/edit/'.$id)->with(['status'=>'danger','message'=>'名称已存在!']);
            }
            $user = DB::table('goods')->where('id',$id)
            ->update([
                'name' => $name,
            ]);
            return redirect()->intended('/admin/goods')->with(['status'=>'success','message'=>'修改成功!']);
        }
        
    }
}
