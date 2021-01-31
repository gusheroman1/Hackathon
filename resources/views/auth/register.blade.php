<link rel="stylesheet" type="text/css" href="css/index.css">

<link rel="stylesheet" href="css/regis.css">
<script src="js/jquery-3.3.1.min.js"></script>
<nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                VUY
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ url('/doctor') }}">Our Doctor</a></li>
                        <li><a href="{{ url('/doctor') }}">Evaluation</a></li>
                        <li><a href="{{ url('/info') }}">Information</a></li>
                        @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/diary') }}">Diary</a></li>
    
                    <li><a href="{{ url('/chats/10') }}">Talk with Doc</a></li>
                        <li>  <a  href="{{ url('/home') }}">{{ Auth::user()->name }}</a></li>

                       <li> <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a></li>
                                    </ul>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>

                    @else
                        <li><a  href="{{ route('login') }}">Login</a></li>
                    @endauth
            @endif

                </div>

                <script>
                    $(document).ready(function () {
                        $(".menu-icon").on("click", function () {
                            $("nav ul").toggleClass("showing");
                        });
                    });

                    // Scrolling Effect

                    $(window).on("scroll", function () {
                        if ($(window).scrollTop()) {
                            $('nav').addClass('black');
                        } else {
                            $('nav').removeClass('black');
                        }
                    })

                </script>
            </nav>
<div class="wrapper">
			<div class="inner">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <h3>Register</h3>

                        <div class="form-holder active">
                                <input id="name" type="text" placeholder="Username"class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-holder">
                                <input type="text" placeholder="Gender" class="form-control" name="gender">

                             
                        </div>
                        <div class="form-holder">
                                <input type="number" class="form-control" placeholder="Age">

                               
                        </div>

                      

                        <div class="form-holder">
                                <input id="email" type="email" placeholder="E-mail"class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                        <div class="form-holder">
                                <input id="password" type="password" placeholder="Password"class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        

                            <div class="form-holder">
                                <input id="password-confirm" type="password" placeholder="Re-type Password"class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

                        <div class="form-login">
                                <button type="submit">
                                    {{ __('Register') }}
                                </button>
                           
                    </form>
        </div>
                        </div>

