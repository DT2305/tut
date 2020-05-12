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
