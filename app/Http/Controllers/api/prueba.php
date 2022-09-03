<?php

namespace App\Http\Controllers\api;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class prueba extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function holaMundo(){
        return "hola mundo";
    }
}
