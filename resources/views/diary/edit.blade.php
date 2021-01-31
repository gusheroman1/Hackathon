<head>
<title>VUY</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="/js/deletedi.js"></script>

    <link rel="stylesheet" href="/css/diary.css">
    <link rel="stylesheet" href="/css/index.css">

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
</head>

<body>
    <header>
        <div class="row">

            
            <div class="col-sm-1">

            </div>
            <div class="col-sm-10">
                <div class="row">
                <div class="col-sm-1">

</div>   
                <div class="col-sm-9">
                        <div class="content">
                            <h3><b>Edit Diary</b></h3>
                            <hr width="80%" size="5">
  <form method="post" action="{{action('DiaryController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   My   Emotion  : 

   <div class="form-group">
   <a href="#" class="btn btn-info">Happy</a> 
                                            <a href="#" class="btn btn-warning">Cheerful</a>
                                           <a href="#" class="btn btn-success">normal</a>
                                           <a href="#" class="btn btn-secondary">Sad</a>
                                            <a href="#" class="btn btn-dark">Very Sad</a>

    <input type="text" name="number" class="form-control" value="{{$diary->number}}" placeholder="" />
   </div>

        
   <div class="form-group">
     Date
    <input type="date" name="date" class="form-control" value="{{$diary->date}}" placeholder="" />
   </div>
   <div class="form-group">
   Diary Name 
   <input type="text" name="diaryname" class="form-control" value="{{$diary->diaryname}}" placeholder="" />
   </div>
   <div class="form-group">
   Content 
   <input type="text" name="content" class="form-control" value="{{$diary->content}}" placeholder="" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-warning" value="Edit" />
   </div>
  </form>
 </div>
</div>