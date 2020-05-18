<!DOCTYPE html>
<html lang="en">
<link rel="icon" href="/img/CTUT_logo.png">
<?php
use Illuminate\Support\Facades\Auth;
use App\admin;
use Illuminate\Support\Facades\DB;
//$a = Auth::guard('admin')->user()->id;
//$b = admin::find($a);
//$adminAvatar = $b['avatar'];

$admin = DB::table('admins')->count();
$user = DB::table('users')->count();
$student = DB::table('students')->count();
$new = DB::table('news')->count();
$category = DB::table('categories')->count();
?>

@include('admin.includes.head')
<body class="hold-transition sidebar-mini sidebar-collapse ">
<div class="wrapper">

  <!-- Navbar -->
  @include('admin.includes.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('admin.includes.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->

    <!-- /.content-header -->
    @include('admin.includes.content-header')
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        @yield('content')
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  @include('admin.includes.control-sidebar')
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  @include('admin.includes.footer')



</div>
<!-- ./wrapper -->
@include('admin.includes.changepass-modal')
<!-- REQUIRED SCRIPTS -->
@include('admin.includes.scripts')
</body>
</html>
