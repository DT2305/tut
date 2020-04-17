<!doctype html>
<html lang="en">
<?php
//use App\Categories;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\DB;
//
//$cate = Categories::all();
//$new = DB::table('news')->orderBy('view', 'desc')->get();
//
//$user = Auth::user();
?>

@include('home.includes.head')

<body>
@include('home.includes.jumbotron')
@include('home.includes.nav')
<div class="container" style="margin-top:30px">
    <div class="row">
        @yield('content')
        @include('home.includes.sidebar')

    </div>
</div>

@include('home.includes.changepass-modal')
@include('home.includes.script')
</body>
</html>
