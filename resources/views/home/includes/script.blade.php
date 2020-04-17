

@if(session('phanquyen'))
    <script>
        alert('{{session('phanquyen')}}');
    </script>
@endif
