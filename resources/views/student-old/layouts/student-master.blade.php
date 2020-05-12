<!doctype html>
<html lang="en">
<link rel="icon" href="/img/CTUT_logo.png">

@include('student.includes.head')
<body>
@include('student.includes.jumbotron')
@include('student.includes.nav')

<div class="container" style="margin-top:30px">
    <div class="row">
        @yield('content')
        @include('student.includes.sidebar')

    </div>
</div>

@include('student.other.login-modal')
@include('student.other.changepass-modal')
@include('student.includes.script')
</body>
</html>
