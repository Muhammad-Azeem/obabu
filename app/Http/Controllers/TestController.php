<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class TestController extends Controller
{
    public function testCors(){
        return Response::json(array('status' => 200, 'successMessage' => "Tested"), 200, []);
    }
}
