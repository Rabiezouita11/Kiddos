<!DOCTYPE html>
<head>
  <meta charset="utf-8">
  <link href="{{ asset('css1/bootstrap.css') }}" rel="stylesheet">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">نَّصُّ جَلْسَةُ سَمَرٍ  </h2>
 	<br/>
     <?php
$b = DB::table('resultatdars1s')->where('nom','=',$produits->name)->get(); 

$a=$b->sum('score')  ;
     ?>


@if( $b->isEmpty())

<center><h3> لا توجد معلومات </h3></center>

<center><a href="{{route('resultatdevoirdars1')}}"> <button  class="btn btn-warning pull-right">retour</button></a></center>

<form action="" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $produits->id }}">

 	<div class="form-group">




@else
        <label>score</label>
   <center>  <input class="form-control" type="text" name="nomproduit" value="{{$a}}" readonly></center>
    


</div>
</form>
<center><a href="{{route('resultatdevoirdars1')}}"> <button  class="btn btn-warning pull-right">retour</button></a></center>

@endif



</body>

</html>
