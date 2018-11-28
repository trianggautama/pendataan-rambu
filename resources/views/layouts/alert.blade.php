<script>
        @if (session('success'))
        swal({  
           type: 'success',
           title: '{{session('success')}}',
           showConfirmButton: false,
           timer: 2000
        })
        @endif
s </script>