<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

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
}
