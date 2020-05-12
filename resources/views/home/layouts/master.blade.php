<!doctype html>
<html lang="en">
@include('home.includes.head')
<body>
@include('home.includes.nav')
<!-- END header -->
@include('home.includes.hero')


@yield('content')

@include('home.includes.footer')
<!-- END footer -->

{{--<!-- loader -->--}}
{{--<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214"/></svg></div>--}}
@include('home.includes.changepass-modal')
@include('home.includes.scripts')
</body>
</html>
