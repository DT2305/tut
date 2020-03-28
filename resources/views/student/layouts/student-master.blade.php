<!doctype html>
<html lang="en">
@include('student.includes.head')
<body>
@include('student.includes.nav')

<div class="container" style="margin-top:30px">
    @yield('content')
</div>
@include('student.other.login-modal')
</body>
</html>
