
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>
<!-- bootstrap -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <!-- Scripts -->
    <script src="{{ asset('js/nav.js') }}" defer></script>
    <script src="{{ asset('js/deletedi.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/nav.css') }}" rel="stylesheet">
    <link href="{{ asset('css/diary.css') }}" rel="stylesheet">

    </head>


    @guest
 <li class="nav-item">
                   <a class="nav-link js-scroll-trigger" href="{{ url('/student') }}">Evaluation</a>
            </li>  
            <li class="nav-item">

            <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Meet Dr.</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ route('login') }}">Service</a>
            </li>
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/student') }}">Information</a>
            </li>      
                        <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/student') }}">Evaluation</a>
            </li>  
                        <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/student') }}">Meet Dr.</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/diary') }}">Service</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{ url('/student') }}">Information</a>
            </li>    
            <li class="nav-item">
                
            <a id="navbar" class="nav-link" href="#" role="button" >
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                    <a class="navbar" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
</body>
</html>