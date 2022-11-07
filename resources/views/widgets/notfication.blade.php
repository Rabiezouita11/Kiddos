<?php
$b = DB::table('contacts')->count(); 
$c = DB::table('contacts')->get(); 
?>
 <ul class="navbar-nav">
<li class="nav-item dropdown">
                <a class="nav-link" href="javscript:void(0)" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">notifications</i>
                  <span class="notification">{{$b}}</span>
                  <p class="d-lg-none d-md-block">
                  إشعارات
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                 @foreach( $c as $t ) 
                <a class="dropdown-item" href="javascript:void(0)">{{$t->nom}} : {{$t->message}}   <br>{{$t->created_at}}  </a>
                 @endforeach
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route('user',['id'=>Auth::user()->id])}}">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                  حساب
                  </p>
                </a>
              </li>
              </ul>