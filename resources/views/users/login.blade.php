@extends('layouts.homelayout')
@section('home_content')
<br><br>
<form action=" " method="post">

    <div class="container">
        {{@csrf_field()}}
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required><br><br>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required><br><br>

        <button type="submit">Login</button>

    </div>


</form>
@endsection