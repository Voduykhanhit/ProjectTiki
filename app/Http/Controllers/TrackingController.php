<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class TrackingController extends Controller
{
    public function getTracking(){
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
            'tiki-api'=>$token
        ]
    )->get('https://api-sandbox.tiki.vn/integration/v1/tracking');
    $checkstatus = $response->status();
    if($checkstatus == 200)
    {
        $data['tracking'] = $response->json();
        return view('admin.tracking.trackinglist',$data);
    }else{
        return redirect()->back()->with('error','Không kết nối được');
    }
    
    }

    public function getReplay($id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $url='https://api-sandbox.tiki.vn/integration/v1/tracking/'.$id.'/replay';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
            )->post('https://api-sandbox.tiki.vn/integration/v1/tracking/'.$id.'/replay');
        
        $data = $response->status(); 
        if($data == 200)
        {
            return redirect()->back()->with('thongbao','Dữ liệu đã được gửi đi!!!');
            
        }else{
            return redirect()->back()->with('error','Lỗi hệ thống!!!');
        }
        
    }

    public function getDelete($id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->delete('https://api-sandbox.tiki.vn/integration/v1/requests/findBy?track_id='.$id)->json();
        $data=$response;
        
         if(isset($data['errors'])){
            return redirect()->back()->with('error','request id của danh mục này vẫn còn tồn tại bạn không được xóa trường dữ liệu này');
         }
         return redirect()->back()->with('thongbao','Dữ liệu yêu cầu đã bị xóa');
    }
}
