<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>portofolio ADINDA</title>
    <link href='{{ asset('./css/index.css') }}' rel="stylesheet" type="text/css">
    <link href='{{ asset('./bootstrap/css/bootstrap.min.css') }}' rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
</head>

<body>
    @include('header')
    @yield('content')

    <script src="{{ asset('./js/jquery.js') }}"></script>
    <script>
        // $(window).scroll(function() {
        //     if ($(window).scrollTop() >= 30) {

        //         $('.header').addClass('dark')
        //         $('.navlink a').addClass('text-light')
        //         $('.logo').addClass('text-light')
        //     } else {
        //         $('.header').removeClass('dark')
        //         $('.navlink a').removeClass('text-light')
        //         $('.logo').removeClass('text-light')
        //     }
        // })


    </script>
</body>

</html>
