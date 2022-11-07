<?php

$b = DB::table('users')->where('question1','=',1)->get(); 

?>

     @if( $b->isEmpty())
     <h1>nothing</h1>
     @else
@foreach ($b as $t )
{{$t->name}}
@endforeach

@endif