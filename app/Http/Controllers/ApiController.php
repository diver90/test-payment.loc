<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Client\Response;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function callback(Request $request)
    {
        $data = $request->all();
        if(!empty($data)){
            $order = Order::find($data['order']['order_id']);
            $order->status = $data['order']['status'];
            $order->save();

            if($data['transaction']['status'] === 'fail'){
                $fail = $data['transaction'];
                $fail['message'] = $data['error']['recommended_message_for_user'];
                session()->flash('fail', $fail);
                return \response()->json('/sorry');
            } elseif ($data['transaction']['status'] === 'success') {
                return \response()->json('/thank-you');
            }
        }
        return \response()->json('/');
    }
}
