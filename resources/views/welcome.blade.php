<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Management</title>
</head>
<body>
    <h1>Welcome to Blood Bank</h1>
    <h5>Donates Blood Save others Life</h5>
    <h3>Users</h3>
    @if(session()->has('message'))  
    <p>{{session()->get('message')}}</p>@endif
    <a href="{{route('create.user')}}"class="btn btn-sm btn-primary" style="float: right">New</a>
    <table class="table">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Donor Name</th>
            <th scope="col">Email</th>
            <th scope="col">Blood Group</th>
            <th scope="col">Date Of Donation</th>
            <th scope="col">Qutantity(in ml)</th>
            <th scope="col">Actions</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <th scope="row">{{$loop->iteration}}</th>
                <td>{{$user->donor_name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->blood_group}}</td>
                <td>{{$user->date_of_donation}}</td>
                <td>{{$user->quantity}}</td>
                <td>
                  <a href="{{route('edit.user',encrypt($user->id))}}"class="btn btn-primary">Edit</a>
                  <a href="{{route('delete.user',encrypt($user->id))}}"class="btn btn-danger">Delete</a>
                  


        
        </tr>
        @endforeach
        </tbody>


      </table>
    </body>
</html>