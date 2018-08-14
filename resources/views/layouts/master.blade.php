<!DOCTYPE html>
<html style="font-family:Athiti, sans-serif;">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whitelisting System</title>
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/ionicons.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Athiti">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Average+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cantarell">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>

<body>
    @include('layouts.header')

    @yield('content')

    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/bootstrap-notify.min.js')}}"></script>
    @yield('customjavascript')

    @if (session('status'))
           <script>
               $.notify({
                   message: '{{ Session::get('status') }}'
               },{
                   type: '{{ str_replace('alert-','',Session::get('alert-class', 'alert-info') ) }}',
                   delay: 3000
               });
           </script>
       @endif



    @include('layouts.footer')

</body>

</html>
