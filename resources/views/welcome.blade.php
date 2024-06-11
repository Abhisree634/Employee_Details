<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/main.css')}}">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hire22.AI</title>
</head>
<body style="background-color: rgba(224, 215, 179, 0.386)">
  <style>

    h1{
      text-align: center;
      margin-top: 20px;
      color: blueviolet;
    }
    </style>
    <h1>Welcome to Hire22.AI</h1>
    @if(session('message'))
    <div class="alert alert-success alert-dismissible fade show p-2 small lh-sm" role="alert" style="position: fixed; left: 10px; top: 25px; z-index: 9999;">
        {{ session('message') }}
    </div>
@endif


    <a href="{{route('create.user')}}"class="btn btn-sm btn-primary" style="float: right">Create</a>
    <table class="table">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">City</th>
            <th scope="col">mobile</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$users->firstItem() + $loop->index}}</th>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->city}}</td>
                <td>{{$user->mobile}}</td>
                <td>
                  <a href="{{route('edit.user',encrypt($user->id))}}"class="btn btn-primary">Update</a>
                  <a href="{{route('delete.user',encrypt($user->id))}}"class="btndangr">Delete</a>
                  


        
        </tr>
        @endforeach
        </tbody>


      </table>
      <div>
        {{$users->links()}}
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
     <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <script src="script.js"></script> 
    </body>
</html>