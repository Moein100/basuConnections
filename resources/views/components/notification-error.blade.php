@if(session("error_message"))
    <script>
        Swal.fire(
            {
                title: 'no idea',
                text : '{{session("error_message")}}',
                icon: 'warning',
                confirmButtonText: 'Ok',
                confirmButtonColor: '#3085d6',
                timer: 4000
            });
    </script>
@endif
