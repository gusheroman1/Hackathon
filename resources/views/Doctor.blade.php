<!DOCTYPE html>
<html>
<title>VUY</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Depression.css">
    <link rel="stylesheet" type="text/css" href="css/index.css">
    

<body>
    <!-- start banner Area -->
    <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                VUY                </div>
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
	<img src="images/bannerdoc.png" style="width: 100%">
    <!-- End banner Area -->
    
    <div class="container" style="padding-top: 20px;">
        <hr style="background-color: #000000; height: 1px;">
        <h1 class="text-heading-s">Our Psychiatrists </h1>
        <hr style="background-color: #000000; height: 1px;">
    </div>

    <section class="container">
        <div class="card">
            <center><img src="https://mpics.mgronline.com/pics/Images/558000013956301.JPEG"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Dujruedee Apiwong</b></h4> 
                <p><i>&emsp;&emsp;"Who walked directly in this path with a happy heart
                    Aims to help people to step away from mental suffering 
                    Not the angel, but looks like angel And when chatting with her
                      You know that going to the psychiatrist Not a scary thing as you think"</i></p> 
            </div>
        </div>
        <div class="card">
                <center><img src="https://www.matichon.co.th/wp-content/uploads/2018/07/S__8478728.jpg"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Yongyuth Wongpiromsan</b></h4> 
                <p><i>&emsp;&emsp;"An advisor of the Department of Mental Health.
                    Pay attention to mental health of people, and provide knowledge and straightforward advice with real expertise"</i></p> 
            </div>
        </div>
        <div class="card">
                <center><img src="https://img.tnews.co.th/userfiles/images/PWT_9153.jpg"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Kampanart Tansithabudhkung</b></h4> 
                <p><i>&emsp;&emsp;"The famous psychiatrist in social media who do everything with happiness
                    . A person with a good heart, merciful, sympathetic to others. There are a va
                    riety of abilities that will help to provide clear consultation."</i></p> 
            </div>
        </div>
        <div class="card">
                <center><img src="http://3.bp.blogspot.com/_JMgD8p6ATS8/TSwMVgfqDzI/AAAAAAAAAEs/QqOCSzo3wZA/s1600/umaporn.jpg"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Umaporn Trangkasombat</b></h4> 
                <p><i>&emsp;&emsp;"Psychiatrist No.1 of Thailand Expert Child and adolescent
                     psychology He has written more than 10 books on childcare,
                      EQ development in children and adolescents. Relationship between spouses and many more"</i></p> 
            </div>
        </div>
        <div class="card">
                <center><img src="data:image/jpeg;base64,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"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Alisa Wachasintu</b></h4> 
                <p><i>&emsp;&emsp;"Professor Alisa Wachasintu, MD, Child Psychiatry Unit Department of Psychiatry Faculty 
                    of Medicine Chulalongkorn University Was the first Thai to receive the 
                    Royal College of psychiatrists Fellowship of the United Kingdom, which was awarded
                     to those who have been doing psychiatry for 10 years continuously."</i></p> 
            </div>
        </div>
        <div class="card">
                <center><img src="http://www.craniofacial.or.th/images/happy-family-day-2015-parichawan.jpg"  style="width:95%; padding-top: 10px;"></center>
            <div class="container">
                <h4 style="padding-top: 10px; text-align: center;"><b>Parichawan Jansiri</b></h4> 
                <p><i>&emsp;&emsp;"The famous psychiatrist in social media Those who do everything with happiness are those who have a good heart, have compassion for others. 
                    There is a wide range of abilities 
                    that can help provide clear advice and expression of behavioral problems 
                    of children studying the upper elementary school tutorial."</i></p> 
            </div>
        </div>
    </section>    
</body>
</html> 
  