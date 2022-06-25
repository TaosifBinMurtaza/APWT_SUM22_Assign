@extends('layouts.loggedinlayout')
@section('loggedin_content')

<h1> User Dashboard</h1>
<table border="1">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
    </tr>

    @foreach($user as $u)
    <tr>
        <td>{{$u->id}}</td>
        <td><a href="{{route('user.details',['id'=>$u->id])}}">{{$u->name}}</a></td>
        <td>{{$u->email}}</td>
    </tr>
    @endforeach
</table>


@endsection