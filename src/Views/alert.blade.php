<script src="{{ asset('alertify/alertify.min.js') }}"></script>
@if (Session::has('alert.config'))
    <script>
        Swal.fire( {!! Session::pull('alert.config') == "" ? '' : Session::pull('alert.config')  !!} );
    </script>
@endif