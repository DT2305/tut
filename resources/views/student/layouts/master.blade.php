<!doctype html>
<html lang="en">
@include('student.includes.head')
<body>
@include('student.includes.nav')
<!-- END header -->
@if(Route::is('student.get.welcome'))
    @include('student.includes.hero-big')
@else
    @include('student.includes.hero')
@endif


@yield('content')

@include('student.includes.footer')
<!-- END footer -->

{{--<!-- loader -->--}}
{{--<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>--}}
@include('student.includes.changepass-modal')
@include('student.includes.scripts')
</body>
</html>
