<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AdminIndexController extends Controller
{
    /**
     *
     * @param  
     * @return \Illuminate\View\View
     */
    public function show()
    {
        return view('admin.index');
    }
}
