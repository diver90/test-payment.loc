<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function callback(Request $request)
    {
        dd($request);
        $data = $request->request;


        return Response::json($data);
    }
}
