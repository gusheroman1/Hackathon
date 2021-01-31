<!doctype html>
<html lang="en">
  <head>
  <title>VUY</title>

<!--     <script src='https://cdn.firebase.com/js/client/2.2.1/firebase.js'></script> -->
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/4.8.1/firebase-database.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script>
      // Initialize Firebase
      var config = {
        apiKey: "AIzaSyCQXZZdvXANIW7nlDcBcarbFjQpG-Z-vKI",
        // authDomain: "my-development-app.firebaseapp.com",
        databaseURL: "https://hackathon-ac229.firebaseio.com/",
        projectId: "hackathon-ac229",
        // storageBucket: "my-development-app.appspot.com",
        // messagingSenderId: "56730489319"
      };
      firebase.initializeApp(config);
    </script>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js'></script>
    <link rel='stylesheet' type='text/css' href='/resources/tutorial/css/example.css'>
    <link rel="stylesheet" type="text/css" href="css/index.css">

    <style>
    @font-face {
    font-family: "Quicksand";
    src: url("https://fonts.googleapis.com/css?family=Quicksand&display=swap");
    font-family: "BowlbyOne-Regular";
    src: url("font/BowlbyOne-Regular.ttf");
    font-family: "CODE Bold_0";
    src: url("font/CODE Bold_0.otf");
    font-family: "Montserrat+Subrayada";
    src: url("font/MontserratSubrayada-Bold.ttf");
  }

@import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro:900&display=swap');
@import url('https://fonts.googleapis.com/css?family=Kanit:900|Montserrat:900');
@import url('https://fonts.googleapis.com/css?family=Quicksand&display=swap');

        body{
          background-color: #f2f2f2;
          width:100hw;
          font-family: "Quicksand";
          text-align: left;
          padding: 30px
          
        }
        h1{
          font-family: "Montserrat+Subrayada";
          font-size: 3em;
          text-align: center;
          padding: 50px; 
          color: #080808;
          text-shadow: 2px 2px 4px #f28e13;

        }
        input{
          width: 80%;
          padding: 50px;
          margin :20px;
        }

    </style>
    
  </head>
  <body>
    <div class="row">
    <div class="col-sm-1">
    </div>
    <div class="col-sm-10">
    <h1> CHATROOM {{ $id }} </h1>
    <div id='messagesDiv'></div>
    <div class="form-group">
    <input type='text' class="form-control" id='nameInput' placeholder='Name'>
    <input type='text' class="form-control" id='messageInput' placeholder='Message'>
    <center><div class="form-group">
    <form>
  <input type="button" class="btn btn-danger" value="Leave Chat!" onclick="history.back()">
</form>   </div><center>
    </div>
    </div> 
    <div class="col-sm-1">
    </div></div>
    <script>
      // var myDataRef = new Firebase('https://uq1c8hsuxrf.firebaseio-demo.com/');
      // var config = {
      //   apiKey: "AIzaSyB1bi8Pe_SHWkfoFru9NHpuMIBrT_rw1ww",
      //   authDomain: "sfa-sales-force-automation.firebaseapp.com",
      //   databaseURL: "https://sfa-sales-force-automation.firebaseio.com",
      //   storageBucket: "sfa-sales-force-automation.appspot.com",
      // };
      // var myDataRef = firebase.initializeApp(config).database();
      let chatRoom = "{{ $id }}";
      var myDataRef = firebase.database().ref('chat/' + chatRoom);
      $('#messageInput').keypress(function (e) {
        if (e.keyCode == 13) {
          var name = $('#nameInput').val();
          var text = $('#messageInput').val();
          // myDataRef.push({name: name, text: text});
          myDataRef.push({
              name: name,
              text: text
          });
          $('#messageInput').val('');
        }
      });
      myDataRef.on('child_added', function(snapshot) {
        var message = snapshot.val();
        displayChatMessage(message.name, message.text);
      });
      myDataRef.on('child_removed', function(snapshot) {
        var deletedPost = snapshot.val();
        console.log("Chat was removed", deletedPost);
      });
      // myDataRef.ref('notification').on('value', function(snapshot) {
      //   var message = snapshot.val();
      //   displayChatMessage(message.name, message.text);
      // });
      // myDataRef.ref('notification').on('child_removed', function(snapshot) {
      //   var deletedPost = snapshot.val();
      //   console.log("Chat was removed", deletedPost);
      // });
      function displayChatMessage(name, text) {
        $('<div/>').text(text).prepend($('<em/>').text(name+': ')).appendTo($('#messagesDiv'));
        $('#messagesDiv')[0].scrollTop = $('#messagesDiv')[0].scrollHeight;
      };
    </script>
  </body>
</html>