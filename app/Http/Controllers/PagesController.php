<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\View;
class PagesController extends Controller
{
    //Trang chủ
    public function getIndex(){ 
        return view('admin.layout.index');
    }
}