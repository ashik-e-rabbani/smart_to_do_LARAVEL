<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Smart Todo</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
    <body>
@extends('layout.base')  
@section('content')  


<form action="insert" method="POST">
    <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
  <div class="form-group">
    <label for="Title_of_task">Title</label>
    <input type="text" class="form-control" name="task_title" id="Title_of_task" aria-describedby="emailHelp" placeholder="Enter Title">
  </div>

   <div class="form-group">
    <label for="Title_of_task">Description</label>
    <input type="text" class="form-control" name="Descr_of_task"  id="Descr_of_task" aria-describedby="emailHelp" placeholder="Enter Description">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

<div class="text-center">
    
   @if($data)

   @foreach ($data as $d)
<tr>
<td>{{ $d->title }}</td>

</tr>
@endforeach
   
   @endif
</div>



@stop  
    </body>
</html>
