<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1\> Table Details<a href="{{ route('practise.create') }}"><button style="float:right; ">Add Form</button></a>

  <table>
    <thead>
  <tr>
    <th>SN</th>
    <th>Name</th>
    <th>action</th>
  </tr>
  </thead>
  <tbody>

    @foreach ($practise as $abc)

  <tr>
<!-- incrementing  -->
  <td>{{ $i++ }}</td> 
  <td>{{ $abc->name }}</td>
   <td><a href="{{ route('practise.edit',$abc->id) }}"><button>Edit</button></a>  
   
   <form action="{{ route('practise.destroy',$abc->id) }}" method="POST">
   @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
  </form>
  </td>
</tr>
  @endforeach
  </tbody>
</table>

</body>
</html>