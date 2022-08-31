<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BikeController extends Controller // 對應web的內容
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // dd("bike index ok");
        
        // view('floder.filename') 不等於 route('路由資料夾 的 檔案')
        // view('bike.index')      不等於 route('bike.index')
        
        // $url=route('bikes.edit',['bike'=>1,'test'=>123,'xxx'=>444]);
        // dd($url);

        // return view('bike123.index');

        $myArr=[1,2,3];
        $data=[
            'myArr'=>$myArr,
            'v1'=>11,
            'v2'=>12
        ];
        return view('bike123.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        dd("bike.create ok");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        dd("bike edit ok");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
