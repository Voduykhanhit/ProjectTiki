<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
class OrderController extends Controller
{
    public function getOrder()
    {
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders([
            'tiki-api' => $token,
            'Accept' => 'application/json',
        ])->get('https://api-sandbox.tiki.vn/integration/v1/orders');
       
        
        $checkstatus = $response->status();
        
        
        if($checkstatus == 200)
        {
            $order = $response->json()['data'];
            return view('admin.order.orderlist',compact('order'));
        }else{
            return redirect()->back()->with('error','Kết nối thất bại');
        }
    }
}
