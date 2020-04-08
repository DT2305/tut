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
