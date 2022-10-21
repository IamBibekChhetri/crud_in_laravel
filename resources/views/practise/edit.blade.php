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

input[type=submit], button{
  background-color: #04AA6D;
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
    

<form action="{{ route('practise.update',$practise->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')

<label>Name: <br>
<input type="text" name="name" value="{{ $practise->name }}">
</label> 
<br>
<br>
<label>Address: <br>
<input type="text" name="address" value="{{ $practise->address }}" >
</label> 
<br>
<label for="country">Country</label>
    <select id="country" name="country" value="{{ $practise->country }}">
      <option value="Australia">Australia</option>
      <option value="Canada">Canada</option>
      <option value="USA">USA</option>
    </select>
<label>Phone:<br>
<input type="number" name="phone" value="{{ $practise->phone }}">
</label> 
<br>


<button type="submit">Submit</button>
<br>
<h1><a href="{{asset('practise/view')}}"></a><button>View Table</button></h1>
<br>
</form>
</body>
</html>