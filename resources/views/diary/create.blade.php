<!DOCTYPE html>
<html>

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
</head>

<body>
        <div class="row">
            
            
            <div class="col-sm-1">

            </div>
            <div class="col-sm-10">
                <div class="row">
                <div class="col-sm-1">

</div>   
</div>   
</div>   
<div class="col-sm-1">

            </div>
            <div class="col-sm-1">

            </div>
           
                <div class="col-sm-9">
                        <div class="content">
                            <h3><b>Create Diary</b></h3>
                            <hr width="80%" size="5">
                            <form method="post" action="{{url('diary')}}">
                                    {{csrf_field()}}
                                   <tr>

                                            <td>My Emotion  :</td>
                                            <div class="form-group">

                                            <a href="#" class="btn btn-info">Happy</a> 
                                           <a href="#" class="btn btn-warning">Cheerful</a>
                                            <a href="#" class="btn btn-success">normal</a>
                                           <a href="#" class="btn btn-secondary">Sad</a>
                                           <a href="#" class="btn btn-dark">Very Sad</a>

                                            <td style="text-align: left">
                                            <td><input class="form-control" type="text"
                                                    name = "number"  placeholder="emotion"></td>
                                            
                                        </tr>
                                        <td><label for="example-datetime-local-input" class="timestamp">Date:</label></td>
                                            <td><input class="form-control" type="date"
                                                    name = "date" id="date" placeholder="date"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="text">Dairy Name :</label></td>
                                            <td><input type="text" class="form-control" id="diaryname"
                                                    placeholder="Enter dairy name" name="diaryname"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="content">Content :</label></td>
                                            <td><textarea class="form-control" rows="6" id="content"
                                                    placeholder="Enter content" name="content"></textarea></td>
                                        </tr>
  
                                       
                </div>
               
            </div>

    
</body>
   
   
   <div class="form-group">
    <input type="submit" class="btn btn-success" value="Post"/>
    
   </div>
  </form>
 </div>
</div>
</html>