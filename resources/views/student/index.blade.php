<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>        
  <a href="{{route('students.create')}}" class="mb-3 btn btn-success" role="button">add</a>
  <!-- <button type="button" class="btn btn-warning">Warning</button> -->
  <table class="table">

    <thead>
      <tr>
        <th>id</th>
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
        <th>操作</th>
      </tr>
    </thead>
    <!-- @foreach ($data as $student) -->
    <!-- {{$student->name}} -->
    <!-- @endforeach -->
   
    
    <tbody>
      <!-- 使用foreach從 控制台/控制台資料create裡設定的$data撈出資料 -->
    @foreach ($data as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->chinese}}</td>
        <td>{{$student->english}}</td>
        <td>{{$student->math}}</td>
        <!-- php artisan route:list 查看 URI 這裡是 students/{student}/edit 
             網址帶值 語意化-->
        <td>
          <a href="{{route('students.edit',$student->id)}}" class="mb-3 btn btn-success" role="button">編輯</a>
        <!-- delete因為沒有form表單傳值, 所以不能用和上述的編輯一樣的方法製作, 這裡給一個form表單建立delete -->
        <form action="{{route('students.destroy',$student->id)}}" method="post">
          @csrf
          @method('DELETE')
          <input type="submit" class="mb-3 btn btn-danger" value="刪除">
        </form>

        </td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>





