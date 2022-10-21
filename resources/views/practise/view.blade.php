<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>

table, td, th {  
  border: 3px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
button.edit{
  background-color: blue;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button.delete{
  background-color: red;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
button.add{
  background-color: green;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
</style>
<body>
<h1> Table Details</h1><a href="{{ route('practise.create') }}"><button class="add" style="float:right; ">Add Form</button></a>

  <table>
    <thead>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>Address</th>
    <th>Phone No</th>
    <th>Country</th>
    <th>action</th>
  </tr>
  </thead>
  <tbody>

    @foreach ($practise as $abc)

  <tr>
<!-- incrementing  -->
  <td>{{ $i++ }}</td> 
  <td>{{ $abc->name }}</td>
  <td>{{ $abc->address }}</td>
  <td>{{ $abc->phone }}</td>
  <td>{{ $abc->country }}</td>
   <td><a href="{{ route('practise.edit',$abc->id) }}"><button class="edit">Edit</button></a>  
   
   <form action="{{ route('practise.destroy',$abc->id) }}" method="POST">
   @csrf
    @method('DELETE')
   <a href=""><button class="delete">Delete</button>
  </form>
  </td>
</tr>
  @endforeach
  </tbody>
</table>

</body>
</html>