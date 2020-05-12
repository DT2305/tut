<head>
    <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="/img/ctut_logo.png">

    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">

    <base href="{{asset('')}}">

    <link rel="stylesheet" href={{asset("main_layouts/css/bootstrap.css")}}>
    <link rel="stylesheet" href={{asset("main_layouts/css/animate.css")}}>
    <link rel="stylesheet" href={{asset("main_layouts/css/owl.carousel.min.css")}}>

    <link rel="stylesheet" href={{asset("main_layouts/fonts/ionicons/css/ionicons.min.css")}}>
    <link rel="stylesheet" href={{asset("main_layouts/fonts/fontawesome/css/font-awesome.min.css")}}>
    <link rel="stylesheet" href={{asset("main_layouts/fonts/flaticon/font/flaticon.css")}}>
    <link rel="stylesheet" href={{asset("main_layouts/css/magnific-popup.css")}}>

    {{-- Jquery--}}
    <script src={{asset("bootstrap-4.0.0/js/jquery.min.js")}}></script>

    <!-- Theme Style -->
    <link rel="stylesheet" href={{asset("main_layouts/css/style.css")}}>

    <!-- Custom Style -->
    <link rel="stylesheet" href={{asset("main_layouts/css/custom-style.css")}}>

    {{--    ionicon--}}
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href={{asset("fontawesome/all.css")}}>

    @yield('css')

</head>
