<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<br>
<!-- 注意xampp的根目錄路徑問題 -->
    <!-- 方法1-URI 絕對路徑 -->
    <a href="/bikes/create"> /bikes/create-URI==絕對路徑 </a>
    ||||||||||||||||||||||||||
    <!-- 方法2-Name 相對路徑 -->
    <a href="{{route('bikes.create')}}"> { {route('bikes.create')} }==相對路徑 </a>
    <br>
    <!-- ------------------------------------------------------------ -->
    <!-- 方法2-Name-edit相對路徑 -->
    <a href="{{route('bikes.edit', ['bike' => 1])}}">{{route('bikes.edit', ['bike' => 1])}}-Name=相對路徑</a>
    ||||||||||||||||||||||||||
    <!-- 方法2-Name-edit絕對路徑 -->
    <a href="/bikes/1/create">/bikes/1/create-URI=絕對路徑</a>
    <br>
    <!-- ------------------------------------------------------------ -->
    <!-- 增加傳遞值的延伸應用 : 該陣列可以添加更多值, 依照需求取值 -->
    <a href="{{route('bikes.edit', ['bike' => 1 , 'test'=>123])}}">增加傳遞值</a>
    <br>
    <!-- ------------------ -->
    <a href="{{route('student456')}}">edit-btn-Name</a>
    <br>
    <h1>理論上以下三種範例為相同的網址</h1>
    <a href="/student">絕對路徑</a>
    <a href="{{route('student456')}}">別稱</a>
    <a href="{{route('bikes.index')}}">相對路徑(這個用bikes代替student, 因為bike是用自動產生的格式可以這樣用, 而student為原版)</a>
</body>
</html>