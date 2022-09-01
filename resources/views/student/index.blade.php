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
      </tr>
    </thead>
    <!-- @foreach ($data as $student) -->
    <!-- {{$student->name}} -->
    <!-- @endforeach -->
   
    
    <tbody>
    @foreach ($data as $student)
      <tr>
        <td>{{$student->id}}</td>
        <td>{{$student->name}}</td>
        <td>{{$student->chinese}}</td>
        <td>{{$student->english}}</td>
        <td>{{$student->math}}</td>
      </tr>
    @endforeach
    </tbody>
  </table>
</div>

</body>
</html>





