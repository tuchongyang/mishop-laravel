<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function success($data){
        return response()
                ->json(['result' => $data, 'status' => 200]);
    }
    public function error($message,$data){
        return response()
                ->json(['message' => $message,'result'=>$data, 'status' => 400]);
    }
}
