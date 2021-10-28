<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
class RequestController extends Controller
{
    public function getRequest(){
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/requests');
        $ckeckstatus = $response->status();
        if($ckeckstatus == 200)
        {
            $request = $response->json()['data'];
            
            return view('admin.request.requestlist',compact('request'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
       
    }
    public function Details($id)
    {
        $token = '55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->get('https://api-sandbox.tiki.vn/integration/v1/requests/'.$id);
        $ckeckstatus = $response->status();
        if($ckeckstatus == 200)
        {
            $details = $response->json();
           
            return view('admin.request.requestdetails',compact('details'));
        }else{
            return redirect()->back()->with('error','Không kết nối được');
        }
    }
    public function getDelete($id)
    {
        $token='55f438d1-3438-409e-b5a4-9d16e764c5b8';
        $url='https://api-sandbox.tiki.vn/integration/v1/requests/'.$id;
        $response = Http::withHeaders(
            [
                'tiki-api'=>$token
            ]
        )->delete('https://api-sandbox.tiki.vn/integration/v1/requests/'.$id);
        $ckeckstatus = $response->status();
        
        if($ckeckstatus == 200)
        {
            return redirect()->back()->with('thongbao','Dữ liệu yêu cầu đã bị xóa');
        }else{
            return redirect()->back()->with('error','Xóa thất bại');
        }
       
    }
}
