<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>JOB - Tìm việc 24h</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=League+Spartan:wght@100;300;400;600;700&display=swap" rel="stylesheet">

        <link href="{{asset('users/css/bootstrap.min.css')}}" rel="stylesheet">

        <link href="{{asset('users/css/bootstrap-icons.css')}}" rel="stylesheet">

        <link href="{{asset('users/css/owl.carousel.min.css')}}" rel="stylesheet">

        <link href="{{asset('users/css/owl.theme.default.min.css')}}" rel="stylesheet">

        <link href="{{asset('users/css/tooplate-gotto-job.css')}}" rel="stylesheet">
        
<!--

Tooplate 2134 Gotto Job

https://www.tooplate.com/view/2134-gotto-job

Bootstrap 5 HTML CSS Template

-->
    </head>
    
    <body id="top">

    @include("users.layouts.header")
    @include("users.layouts.menu-left")

    @yield("content")  
       
    @include("users.layouts.footer")

        <!-- JAVASCRIPT FILES -->
        <script src="{{asset('users/js/jquery.min.js')}}"></script>
        <script src="{{asset('users/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('users/js/owl.carousel.min.js')}}"></script>
        <script src="{{asset('users/js/counter.js')}}"></script>
        <script src="{{asset('users/js/custom.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    @yield("js")

    </body>
</html>