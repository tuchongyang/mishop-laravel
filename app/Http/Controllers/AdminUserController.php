<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
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
        $datas = DB::table('users')
                    // ->where('name','like','%'.$name.'%')
                    ->paginate(10)
                    ->appends($request->all());
        return view('admin.users',['datas'=>$datas]);
    }
    public function new(Request $request)
    {
        if($request->isMethod('get')){
            return view('admin.usersNew');
        }
        else{
            $name = $request->input('name');
            $username = $request->input('username');
            $password = $request->input('password');
            $email = $request->input('email');
            $is_admin = $request->input('is_admin');

            /**校验名称是否已存在 */
            $exists_username = DB::table('users')->where('username', $username)->exists();

            if($exists_username){
                return redirect()->intended('/admin/users/new')->with(['status'=>'danger','message'=>'用户名已存在!']);
            }
            
            /**校验名称是否已存在 */
            $exists_email = DB::table('users')->where('email', $email)->exists();

            if($exists_email){
                return redirect()->intended('/admin/users/new')->with(['status'=>'danger','message'=>'邮箱已存在!']);
            }
       
            $data = DB::table('users')->insert([
                'name' => $name,
                'username'=>$username,
                'password'=>Hash::make($password),
                'email'=>$email,
                'is_admin'=>$is_admin
            ]);
            return redirect()->intended('/admin/users')->with(['status'=>'success','message'=>'添加成功!']);
        }
        
    }
    public function edit(Request $request,$id=0)
    {
        if($request->isMethod('get')){
            $data = DB::table('users')->where('id',$id)->first();
            return view('admin.usersEdit',['data'=>$data]);
        }
        else{
            $name = $request->input('name');
            $username = $request->input('username');
            $email = $request->input('email');
            $is_admin = $request->input('is_admin');
            $id = $request->input('id');
            /**校验名称是否已存在 */
            $exists = DB::table('users')->where('username', $username)->where('id','<>',$id)->exists();

            if($exists){
                return redirect()->intended('/admin/users/edit/'.$id)->with(['status'=>'danger','message'=>'用户名已存在!']);
            }
            $exists_email = DB::table('users')->where('email', $email)->where('id','<>',$id)->exists();

            if($exists_email){
                return redirect()->intended('/admin/users/edit/'.$id)->with(['status'=>'danger','message'=>'邮箱已存在!']);
            }
            $user = DB::table('users')->where('id',$id)
            ->update([
                'name' => $name,
                'username'=>$username,
                'email'=>$email,
                'is_admin'=>$is_admin
            ]);
            return redirect()->intended('/admin/users')->with(['status'=>'success','message'=>'修改成功!']);
        }
        
    }
    
    public function remove($id)
    {
        $exists = DB::table('goods')->where('id', $id)->delete();

        return $this->success(true);
    }
}
