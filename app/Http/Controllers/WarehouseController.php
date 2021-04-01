<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
class WarehouseController extends Controller
{
    public function getWarehouse()
    {
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/warehouses');
        
        $checkstatus = $response->status();     
        if($checkstatus == 200)
        {
            $warehouse = $response->json();
            return view('admin.warehouse.warehouselist',compact('warehouse'));
            
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
        
    }
}
