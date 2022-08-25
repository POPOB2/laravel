
    <?php

// 1. 變數 
        //    $apple='apple';
        //    $apple='red';
//    最終顯示 red

// 2. 陣列
        //    $appleArr=[
            //    'name'=>'apple',
            //    'color'=>'red'
        //    ]

// 3. 除了變數外 (variable, property)
//    新增動作(function, method)

// - 3.1 Class
        // class Fruit{
            // public $name;
            // public $color;
        // }
   
// - 3.2 Object
        //    $appleObj=new Fruit;
   

// ----------------------------------------------------   
//   練習一
// $appleObj name apple
// $appleObj color red
// $appleObj->name='red';

// $appleObj->name="apple";
// $appleObj->color="red";
// ----------------------------------------------------   
// ----比較用的陣列----

$appleA=['name'=>'apple','color'=>'red'];
$banana=['name'=>'banana','color'=>'yellow'];
$kiwi=['name'=>'kiwi','color'=>'green','欄位*N'];
// 假設陣列有10個欄位, 每次設置陣列都要設定10個欄位
dd($appleA);




// ----------------------------------------------------   
// ----物件導向----
// 假設再類別定10個欄位, 僅在這一次設定10個欄位, 之後都是直接這定名字 使用的條件 賦予的值(和使用function一樣)

// 定義類別
Class F{
    public $name;
    public $color; //  內部外部皆可使用
    protected // 保護/不可更改, 僅能用定義別內所設定的賦值
    function __construct($name,$color)
    {
        $this->name=$name;
        $this->color=$color;
    }
}
// 創立物件, 使用類別, 填入資料
$appleee=new F('apple','red');
$banana=new F('banana','yellow');
$kiwi=new F('kiwi','green');
// 顯示物件
// dd($appleee);
// dd($banana);
// dd($kiwi);

// public可以被Class F{}定義類別的外部 做更改
$apple->CCC;
$banana->BBB;


?>
