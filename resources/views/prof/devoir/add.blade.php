<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container">
<h2 class="text-center">اضف ملف</h2>
<form action="{{route('AjoutDevoiradminprof')}}" method="post"  enctype="multipart/form-data"  >
 <input type="hidden" name="_token" value="{{ Session::token() }}">
 <div class="form-group">
          <label>عنوان</label>
          <div>@if ($errors->has('titre'))
          <strong style="color: red;">{{ $errors->first('titre') }}</strong>
          @endif</div>
          <input class="form-control" type="text" name="titre" value="{{ old('titre') }}" required>
          <br>
          <label>ملف</label>
          <div>@if ($errors->has('file'))
<strong style="color: red;">{{ $errors->first('file') }}</strong>
@endif</div>
          <input class="form-control" type="file" name="file" required>
          <input class="form-control" type="hidden" name="etat" value="prof" required>
          <?php
$x=Auth::user()->name;
          ?>
          <input class="form-control" type="hidden" name="nom" value="{{$x}}" required>
 </div>

 <a href="{{route('Devoirprof')}}" class="btn btn-default">لالغاء</a>
 <button  type="submit" class="btn btn-success pull-right">أضيف</button>
</form></body>
</html>

