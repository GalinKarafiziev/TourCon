<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
       
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        <style>
                /* Make the image fully responsive */
                .carousel-inner img {
                    width: 100%;
                    object-fit: cover;
                }
                .center_div{
                    padding-top: 30px;
    margin: 0 auto;
    width:30% }
    .center_div2{
                    padding-top: 30px;
    margin: 0 auto;
    width:80% }
    

                </style>
        <title>Tourcon</title>
    </head>
    <body>
    @include('inc.navbar')
        
    @yield('content')
        
    </body>
</html>
