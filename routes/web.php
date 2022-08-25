<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dd', function () {
    return view('dd');
});
Route::get('/f2.blade.php', function () {
    return view('f2');
});
Route::get('/f3.blade.php', function () { // 下述f3的網址, 但可以自行取名, 若要像f1設置button則是把a標籤的連結路徑放在Route:get的路徑上
    return view('f3'); // 看見名為f3的檔案(不需輸入格式的.blade.php)
});
Route::get('/f_php', function () {
    // 也可以再這個路由裡寫PHP直接反應在頁面上
    $myArr=[1,2,3,4,5];
    // dd($myArr);
    $myName="POPO";

    // return view('f3');
    foreach ($myArr as $key => $value){
        echo $value."<br>";
    }

    echo "hello $myName";
});
// ----------------------------------------------------------------------
// Route::get('/{A區域}', function (B區域) 
// {A區域}是可以變動的, 當user在網址輸入任何東西都會是傳值到這個用{}大框號 框起來的A區域
// A區域的get{} 和 B區域的function() 是連動的, 即 A用{}輸入的內容 會帶值給B()
// retrun則是看是否要把A帶給B的值拿出來使用, 或是直接用return view('f3'); 直接導引到指定的檔案
// Route::get('/{name}', function ($do) {
    // return $do;
    // return "helllo";
    // return view('f3');
// });
// -------------------------------兩個變數-------------------------------
// Request 在上方use宣告 , 功能:用於再?之後帶值 
Route::get('/greeting/{name}/{num}', function (Request $request,$name,$num){ // get(自訂網址),function(自訂網址給值到對應的function內的位置)
    // dd($request->input('test')); // 值為->帶值的包裝名稱 // 這裡用test 在網址輸入?test=123(值), 這樣便會把123賦值給$request
    $str="安安 $name , num => $num"; // 設置字串內容
    return view('front.ff',['nameEE'=>"安安 $name"]); // 顯示 ( 路徑上的檔案, [陣列名nameEE內的值為 安安 $name] )
    // 因為該陣列的 路徑為front.ff , 所以再front.ff檔案裡會獲得該陣列帶來的值, 這個nameEE是陣列的索引值
});
// ----------------------------------------------------------------------


// 先在上方宣告（第五行) -> 設定網址(當被輸入該網址時執行) -> [物件裡的class,裡面名為AAA的function]
Route::get('/TestC', [TestController::class,'AAA']);