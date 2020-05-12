<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{asset("dashboard_layout/plugins/fontawesome-free/css/all.min.css")}}>
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href={{asset("dashboard_layout/dist/css/adminlte.min.css")}}>
    <!-- DataTables -->
    <link rel="stylesheet" href={{asset("dashboard_layout/plugins/datatables-bs4/css/dataTables.bootstrap4.css")}}>
    <!-- Google Font: Source Sans Pro -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{asset("fontawesome/all.css")}}>

    @yield('css')
</head>
