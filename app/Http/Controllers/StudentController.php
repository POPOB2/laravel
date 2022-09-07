<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // return view('Student.index');
        
        // $data= Student::all(); // 把nodel-Studrnt 抓出來 , 存到$data

        // ->get() == fetchAll == 撈出全部資料 , ->first() == fetch == 撈出單筆資料
        $data= Student::orderBy('id', 'desc')->get(); // 使用orderBy改成倒序('排序的號碼','排序方式') , 而->get() 為函式的一部分



        // dd($data); // 查看傳過來的值 內容
        
        // foreach (Student::all() as $Student) {
        //     echo $Student->name;
        // }
        
        // return view('user.profile', ['user' => $user]); // 官網原本的格式

        return view('Student.index',['data' => $data]); // return view==傳到前端 , 的哪裡Student的index , 如何傳變數[]
    }
// ========================================================================建立
    public function create()
    {
        $data= Student::all();
        return view('Student.create',['data' => $data]); 
    }
// ========================================================================
// public function store(Request $request)
// {
//         dd($request->all());
// }
// ========================================================================
public function store(Request $request)
{
    // dd("OK"); // 測試
    $student = new Student();
 
    // 這裡不用id 因為資料庫會自動產生
    $student->name = $request->name;
    $student->chinese = $request->chinese;
    $student->english = $request->english;
    $student->math = $request->math;
    $student->test = 1; // 因為再blade沒有test的表格 , 這裡嘗試用直接賦值1 取代

    $student->save();
    
    return redirect()->route('students.index');
}
// ========================================================================編輯
public function edit($id)
{
        // dd('edit ok');
        // dd($id);
        // first => fetch 單筆資料
        $data = Student::where('id', $id)->first();
        // dd($data);

        // 測試 路徑結果(網址)------------------------------------------
        // $url=route('students.update',['student'=>$data->id]);
        // dd($url);
        // ------------------------------------------------------------

        return view('student.edit', ['data'=>$data]);
       //select one data
}
// -========================================================================更新
public function update(Request $request, $id){

    // 看資料內容
    // $data = Student::find(1);
    // dd($data);

    // $data->name = 'Paris to London';


    // -------實際執行更新到資料表的區域--------
    // except==過濾, 除了(這些)
    $input=$request->except(['_method','_token']);

    // 找到單筆資料
    $data = Student::where('id', $id)->first();
    // 並從這單筆資料 的 指定欄位 設為['值']
    $data->name=$input['name'];
    $data->chinese=$input['chinese'];
    $data->english=$input['english'];
    $data->math=$input['math'];

    $data->save();
    // 傳值到指定 路由(位置)
    return redirect()->route('students.index');
}
// -========================================================================刪除
public function destroy($id){
    $data=Student::find($id);
    $data->delete();
    return redirect()->route('students.index');
}






// -========================================================================

}



