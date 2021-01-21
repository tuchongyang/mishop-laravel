<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    /**
     * 登录
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('admin.login');
    }
    /**
     * 登录
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function auth(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        /**校验用户是否已存在 */
        $exists = DB::table('users')->where('username', $username)->exists();

        if(!$exists){
            return $this->error("用户不存在");
        }
        $user = DB::table('users')->where('username', $username)->first();

        if($user->password != Crypt::encryptString($password)){
            return $this->error("用户或密码错误",['password'=>$user->password,'npwd'=>Crypt::encryptString($password)]);
        }


        return $this->success($user);
    }
}
