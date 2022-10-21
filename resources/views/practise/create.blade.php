<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}
input[type=number]{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit]{
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button{
    background-color: #800000	;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<body>
    

<form action="{{route('practise.store')}}" method="POST" enctype="multipart/form-data">
@csrf
<label>Name: <br>
<input type="text" name="name" >
</label> 
<br>
<label>Address: <br>
<input type="text" name="address" >
</label> 
<br>
<label for="country">Country</label>
    <select id="country" name="country">
      <option value="Australia">Australia</option>
      <option value="Canada">Canada</option>
      <option value="USA">USA</option>
    </select>
<label>Phone:<br>
<input type="number" name="phone" >
</label> 
<br>

<input type="submit" value="Submit">

<br>
</form>
<h1><a href="{{asset('practise')}}"><button>View Table</button></a></h1>
</body>
</html>