<!DOCTYPE html>
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous"><body>
<div class="container">
 	<br/>
 	 	<h2 class="text-center">Modifier Profil</h2>
 	<br/>
<form action="{{route('Modifierprofilee')}}" method="post" enctype="multipart/form-data" >

 	<input type="hidden" name="_token" value="{{ Session::token() }}">
  	<input type="hidden" name="id" value="{{ $users->id }}">

 	<div class="form-group">
      
        <label>Nom</label>
     <input class="form-control" type="text" name="name" value="{{ $users->name }}" readonly></br>
     <label>email</label>
     <input class="form-control" type="email" name="email" value="{{ $users->email }}" required></br>
     <label>classe</label>
    
     <select name="classe" id="cat" class="form-control">

          @foreach($aa  as $cat)


      <option value="{{$cat->nom}}"  @if ($cat->nom == $users->classe) selected  @endif>  {{ $cat->nom }}</option>
      @endforeach

      </select>
     
   


</div>
<?php

$x= Auth::user()->image  ;

?>
<td><img src="{{$x}}" alt=" " class="img-fluid"  width="300px" height="150px"></td>

     <div class="form-group d-flex flex-column" >
        <label>photo</label>

        <input class="form-control" type="file" name="image"  ></br>


</div>
</br>
        
    

    </br>

 

 	<a href="{{route('profilee')}}" class="btn btn-default">Annuler</a>
<button type="submit" class="btn btn-warning pull-right">Modifier</button>

</form>
</body>

</html>


