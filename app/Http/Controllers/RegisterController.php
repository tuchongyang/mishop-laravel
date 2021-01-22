<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Hash;


class RegisterController extends Controller
{
    /**
     * 登录
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('admin.register');
    }
    /**
     * 登录
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function save(Request $request)
    {
        $email = $request->input('email');
        $username = $request->input('username');
        $password = $request->input('password');
        /**校验邮箱是否已存在 */
        $exists = DB::table('users')->where('email', $email)->exists();

        if($exists){
            return $this->error("邮箱已注册",null);
        }
        $user = DB::table('users')->insert([
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password)
        ]);

        return $this->success($user);
    }
    
}
