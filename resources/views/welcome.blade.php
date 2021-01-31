<!DOCTYPE html>
<html>

<head>
<title>VUY</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/index.css">

</head>

<body>
    <div class="wrapper">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    <h1>VUY</h1>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="{{ url('/doctor') }}">Our Doctor</a></li>
                        <li><a href="{{ url('/eva') }}">Evaluation</a></li>
                        <li><a href="{{ url('/info') }}">Information</a></li>
                        @if (Route::has('login'))
                    @auth
                    <li><a href="{{ url('/diary') }}">Diary</a></li>
    
                    <li><a href="{{ url('/chats/5') }}">Talk with Doc</a></li>
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
            <div class="col-sm-12" id="header" style="width: 100%">
                <div class="container">
                    <div class="center">
                        <h1 id="headername">V U Y</h1>
                        <h4 id="headerdes">Are you doubt yourself about depression? If you doubt do this from.</h4>
                        <a href="{{ url('/eva') }}">
                        <button type="button" class="button-round">
                            <h5>Do the form</h5>
                        </button></a>
                    </div>
                </div>

                <script>
                    var open = document.getElementById('hamburger');
                    var changeIcon = true;

                    open.addEventListener("click", function () {

                        var overlay = document.querySelector('.overlay');
                        var nav = document.querySelector('nav');
                        var icon = document.querySelector('.menu-toggle i');

                        overlay.classList.toggle("menu-open");
                        nav.classList.toggle("menu-open");

                        if (changeIcon) {
                            icon.classList.remove("fa-bars");
                            icon.classList.add("fa-times");

                            changeIcon = false;
                        } else {
                            icon.classList.remove("fa-times");
                            icon.classList.add("fa-bars");
                            changeIcon = true;
                        }
                    });

                </script>
            </div>
        </header>

        <section class="doctor">
            <div class="col-sm-12" id="doctor">
                <div class="container">
                    <br>
                    <h2><b>OUR DOCTORS</b></h2>
                    <hr background-color="#F26B6B">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="card">
                                <center><img src="https://mpics.mgronline.com/pics/Images/558000013956301.JPEG"
                                        style="width:95%; padding-top: 10px;"></center>
                                <div class="container">
                                    <h4 style="padding-top: 10px; text-align: center;"><b>Dujruedee Apiwong</b></h4>
                                    <p><i>&emsp;&emsp;"Who walked directly in this path with a happy heart
                                            Aims to help people to step away from mental suffering
                                            Not the angel, but looks like angel And when chatting with her
                                            You know that going to the psychiatrist Not a scary thing as you think"</i>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <center><img src="https://img.tnews.co.th/userfiles/images/PWT_9153.jpg"
                                        style="width:95%; padding-top: 10px;"></center>
                                <div class="container">
                                    <h4 style="padding-top: 10px; text-align: center;"><b>Kampanart Tansithabudhkung</b>
                                    </h4>
                                    <p><i>&emsp;&emsp;"The famous psychiatrist in social media who do everything with
                                            happiness
                                            . A person with a good heart, merciful, sympathetic to others. There are a
                                            va
                                            riety of abilities that will help to provide clear consultation."</i></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="card">
                                <center><img
                                        src="http://www.craniofacial.or.th/images/happy-family-day-2015-parichawan.jpg"
                                        style="width:95%; padding-top: 10px;"></center>
                                <div class="container">
                                    <h4 style="padding-top: 10px; text-align: center;"><b>Parichawan Jansiri</b></h4>
                                    <p><i>&emsp;&emsp;"The famous psychiatrist in social media Those who do everything
                                            with happiness are those who have a good heart, have compassion for others.
                                            There is a wide range of abilities
                                            that can help provide clear advice and expression of behavioral problems
                                            of children studying the upper elementary school tutorial."</i></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="{{ url('/doctor') }}">
                    <button type="button" class="button-round" id="doc"> 
                        <h5>See more ></h5>
                    </button></a>
                </div>
            </div>
        </section>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <section class="form">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div style="background-color: #C8D948;width:100%;height:400px;"></div>

                    </div>
                    <div class="col-sm-8">
                        <h2>Are you have feel like always tries ,didn't have value ,go to do this form.</h2>
                        <a href="{{ url('/eva') }}">
                        <button type="button" class="button-round">
                            <h5>Form</h5>
                        </button><a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>

</html>
