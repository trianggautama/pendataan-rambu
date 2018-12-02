<script>
        @if (session('success'))
        swal({  
           type: 'success',
           title: '{{session('success')}}',
           customClass: 'swal-wide',
           showConfirmButton: false,
           timer: 2000
        })
        @endif
s </script>