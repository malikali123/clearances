@if(Session::has('success'))
@section('script')
    <script>
            $(document).ready(function(){
            toastr.success('{{Session::get('success')}}', '', 
                {
                        "showDuration": 1000,
                        "closeButton": true,
                        positionClass: 'toast-top-center', 
                        containerId: 'toast-top-center',
                        "progressBar": true,

                        // "showMethod": "slideDown", "hideMethod": 
                        // "slideUp", timeOut: 3000
                }
                );
            });
    </script>
@endsection
@endif
