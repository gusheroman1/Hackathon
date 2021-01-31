<!DOCTYPE html>
<html>

<head>
<title>VUY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="js/deletedi.js"></script>

    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/diary.css">
    
</head>

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
<body>
    <header>
        <div class="row">
            
        <div class="col-sm-12" id="headerpic">
                
            <img src="images/diary.jpg">
                <h2 class="center">DAIRY</h2>
                                        <a href="{{route('diary.create')}}" class="btn btn-primary">Add</a>

            </div>
           
            @foreach($diaries as $diary)
            <div class="col-sm-1">
</div>
<div class="col-sm-1">
</div>
            <div class="col-sm-10">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="content">
                           
                            

                            <h3><b>{{$diary['diaryname']}}</b></h3>
                            <hr width="35%" size="5" style="float: right;margin-left: 15px;">
                            <h6 id="date">{{$diary['date']}}</h6>
                            <hr width="35%" size="5" style="float: left;margin-right: 15px;">
                            <p>My Emotion  : {{$diary['number']}}
                            <p>{{$diary['content']}}
                            </p>
                            </div>
                            </div>
                            
                            <form method="post" class="delete_form" action="{{action('DiaryController@destroy', $diary['id'])}}">
                             {{csrf_field()}}
                                 <input type="hidden" name="_method" value="DELETE" />
                                     <button type="submit" class="btn btn-danger">Delete</button>
                                     <a href="{{action('DiaryController@edit', $diary['id'])}}" class="btn btn-warning">Edit</a>
                        <a href="{{route('diary.create')}}" class="btn btn-primary">Add</a>
                        </div>
                        </div>

     </form>


     @endforeach   

                

    
</body>

</html>
