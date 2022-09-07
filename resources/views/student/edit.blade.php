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
  <h2>編輯的頁面</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>        

  <table class="table">

    <thead>
      <tr>
        <th>name</th>
        <th>chinese</th>
        <th>english</th>
        <th>math</th>
      </tr>
    </thead>
    <!-- 可以把下述action的路徑放到 對應的 控制台/控制的資料內 設為變數並dd出來, 確認帶值後的網址會是如何顯示 -->
    <form action="{{route('students.update',['student'=>$data->id])}}" method="post">
      <!-- 安全認證 _token -->
      @csrf
      <!-- 將上面<form action="" method="post">的method的POST取代成PUT 
           可以從F12看見多了一個input:hiddn 實際內容如何取代的從F12觀看-->
      @method('PUT')
      <tbody>
        <tr>
          <td>
            
            <input type="text" name="name" id="name" value="{{$data->name}}"> <!-- 顯示的內容 -->
          </td>
          <td>
            <input type="number" name="chinese" id="chinese" value="{{$data->chinese}}">
          </td>
          <td>
            <input type="number" name="english" id="english" value="{{$data->english}}">
          </td>
          <td>
            <input type="number" name="math" id="math" value="{{$data->math}}">
          </td>
        </tr>


        <tr>
          <td colspan="4">
            <input type="submit" value="add submit">
          </td>
        </tr>
      </tbody>
    </form>


  </table>
</div>

</body>
</html>





