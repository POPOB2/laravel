<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// extends Controller == 原本的Controller.php 裡的 use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
// 是把原地址的use AuthorizesRequests, DispatchesJobs, ValidatesRequests; 繼承過來這裡(類似include)
class TestController extends Controller 
{
    public function AAA(){
        $price=100;
        $price=$price*0.8;
        return view('test',['price'=>$price]);
    }
}

// 用於計算 給予參數 
