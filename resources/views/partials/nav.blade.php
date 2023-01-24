<nav class="navbar  navbar-expand-md home-content  d-flex  navbar navbar-expand-lg align-items-center  shadow-sm">
    <div class="d-flex">

        <div class=" col-9 col-sm-12 d-flex justify-content-between align-content-center align-items-center">

            <div  class="d-flex justify-content-center align-content-center align-items-center">
                <i class=' p-2  ' title="Desplegar Menu Lateral"></i>
                <i class="bi bx bx-menu bi-justify"></i>
                <img class="rounded-circle bg-white " title="Escudo Colegio" src="{{ asset('img/escudo-colegio-sin-fondo.png ') }}"
                    alt="Logo colegio" width="60px" height="60px">
                <span class="text p-1" title="Colegio La independencia"  >Colegio La independencia</span>
            </div>
           


        </div>
       

        <div class="collapse  col-7   d-flex justify-content-between navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
          

            <!-- Right Side Of Navbar -->
           
                <!-- Authentication Links -->
                @guest
                    @if (Route::has('login'))
                        <!-- <li class="nav-item">
                              <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                          </li>-->
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else

                <div>
                    <img src="{{ asset('img/trabajando.png  ') }}" alt="Profile" width="40px" height="50px"
                        class="rounded-circle bg-white">
                    <span class="text-white ">Bienvenido {{ Auth::user()->name }}</span>
                </div>
                    


                    <div class="">
                        <a class="text-white btn   d-flex   btn-close-white" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>

                @endguest
        
        </div>





    </div>
</nav>
