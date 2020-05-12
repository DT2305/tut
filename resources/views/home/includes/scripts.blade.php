<script src="main_layouts/js/jquery-3.2.1.min.js"></script>
<script src="main_layouts/js/jquery-migrate-3.0.0.js"></script>
<script src="main_layouts/js/popper.min.js"></script>
<script src="main_layouts/js/bootstrap.min.js"></script>
<script src="main_layouts/js/owl.carousel.min.js"></script>
<script src="main_layouts/js/jquery.waypoints.min.js"></script>
<script src="main_layouts/js/jquery.stellar.min.js"></script>
<script src="main_layouts/js/jquery.animateNumber.min.js"></script>

<script src="main_layouts/js/jquery.magnific-popup.min.js"></script>

<script src="main_layouts/js/main.js"></script>

@if(session('phanquyen'))
    <script>
        alert('{{session('phanquyen')}}');
    </script>
@endif

<script>
    $('.xacnhan').click(function(e) {
        if (!confirm('Bạn chắc chắn không ? ')) {
            e.preventDefault();
        }
    });

</script>

@yield('js')
