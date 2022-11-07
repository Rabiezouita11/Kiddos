 <li class="nav-item active  ">
            <a class="nav-link" href="{{route('admin2')}}">
              <i class="material-icons">dashboard</i>
              <p>Dashboard</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('user',['id'=>Auth::user()->id])}}">
              <i class="material-icons">person</i>
              <p>ملف تعريفي للمستخدم</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('eleve')}}">
              <i class="material-icons">person</i>
              <p>قائمة التلاميذ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('ensin')}}">
              <i class="material-icons">person</i>
              <p>قائمة المعلمين</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('Devoiradmin')}}">
              <i class="material-icons">person</i>
              <p>إمتحانات</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('darss')}}">
              <i class="material-icons">person</i>
              <p>دروس</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('idmajjj')}}">
              <i class="material-icons">person</i>
              <p>وضعيات ادماجية
</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('autree')}}">
              <i class="material-icons">person</i>
              <p>  وثائق أخرى</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('resulatadmin')}}">
              <i class="material-icons">person</i>
              <p>نتائج التلاميذ</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('feedback')}}">
              <i class="material-icons">person</i>
              <p>قائمة التعليقات</p>
            </a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="{{route('contactadmin')}}">
              <i class="material-icons">person</i>
              <p>  قائمة الإتصال</p>
            </a>
          </li>
      


          <li class="nav-item ">
            <a class="nav-link"  href="{{ route('logout') }}"   onclick="event.preventDefault();
                          document.getElementById('logout-form').submit();">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
             @csrf
         </form>
              <i class="material-icons">location_ons</i>
              <p style="color: red;">تسجيل خروج</p>
            </a>
          </li>