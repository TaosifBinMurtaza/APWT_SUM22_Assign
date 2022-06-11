@extends('layouts.homelayout')
@section('home_content')
<html>

<head>
</head>

<body><br><br>

    <form action='' method='post'>
        {{@csrf_field()}}

        Name:<br>
        <input type='text' name='name'><br>
        @error('name')
        {{$message}}<br>
        @enderror

        E-mail:<br>
        <input type='text' name='email'><br>
        @error('email')
        {{$message}}<br>
        @enderror

        Password:<br>
        <input type='text' name='password'><br>
        @error('password')
        {{$message}}<br>
        @enderror

        Confirm Password:<br>
        <input type='text' name='confirm_password'><br><br>
        @error('confirm_password')
        {{$message}}<br>
        @enderror

        <input type='submit' name='submit_registration'>
    </form>


</body>

</html>
@endsection