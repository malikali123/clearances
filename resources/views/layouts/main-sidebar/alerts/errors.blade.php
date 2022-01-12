@if(Session::has('error'))
    @section('script')
    <script>
            $(document).ready(function(){
            toastr.error('{{Session::get('error')}}', '', 
                {
                        "showDuration": 1000,
                        "closeButton": true,
                        positionClass: 'toast-top-center', 
                        containerId: 'toast-top-center',
                        "progressBar": true,

                        // "showMethod": "slideDown", "hideMethod": 
                        // "slideUp", timeOut: 3000
                        // positionClass: 'toast-bottom-full-width', containerId: 'toast-bottom-full-width'
                }
                );
            });
    </script>
@endsection
@endif
