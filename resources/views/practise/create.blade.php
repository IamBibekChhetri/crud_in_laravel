<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<form action="{{ route('practise.store') }}" method="POST">
@csrf
<label>Name: <br>
<input type="text" name="name" >
</label> 
<br>

<button type="submit">Submit Booking</button>

<br>
</form>
<h1><a href="{{asset('practise')}}"><button>View Table</button></a></h1>
</body>
</html>