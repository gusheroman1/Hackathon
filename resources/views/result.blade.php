<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result</title>
</head>
<body>
    <script>
    @if($score < 2)
            alert({{$score}}+" point, you are normal person")
        @elseif($score <= 9)
            alert({{$score}}+" points, you are normal person") 
        @elseif($score <= 14)
            alert({{$score}}+" points, You can meet doctor if you want")
        @else
            alert({{$score}}+" points, You should to meet doctor")
    @endif
    window.location =" {{ url('/home') }}"
    </script>
</body>
</html>