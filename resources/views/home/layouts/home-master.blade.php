<!doctype html>
<html lang="en">
@include('home.includes.head')
@section('title','home')
<body>
@include('home.includes.nav')
<div class="container" style="margin-top:30px">
@yield('content')
</div>

@include('home.other.login-modal')
@include('home.other.regis-modal')

</body>
</html>
