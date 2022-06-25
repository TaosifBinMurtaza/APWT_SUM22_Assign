@extends('layouts.loggedinlayout')
@section('loggedin_content')


Id: {{$user->id}}<br>
Name: {{$user->name}}<br>
Email :{{$user->email}}<br>
Account Created:{{$user->created_at}}<br>


@endsection