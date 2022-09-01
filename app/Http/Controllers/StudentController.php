<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index()
    {
        // return view('Student.index');
        
        $data= Student::all(); // 把nodel-Studrnt 抓出來 , 存到$data
        // dd($data);
        
        // foreach (Student::all() as $Student) {
        //     echo $Student->name;
        // }
        
        // return view('user.profile', ['user' => $user]); // 官網原本的格式
        return view('Student.index',['data' => $data]); // return view==傳到前端 , 的哪裡Student的index , 如何傳變數[]
    }
// -----------------------------------------------------------------------
    public function create()
    {
        $data= Student::all();
        return view('Student.create',['data' => $data]); 
    }
// -----------------------------------------------------------------------
// public function store(Request $request)
// {
//         dd($request->all());
// }
// -----------------------------------------------------------------------
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

}



