<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png">


        <title>Factorial | @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/style.css') }}">
        <link rel="stylesheet" href="{{asset('plugins/css/all.min.css') }}">

        <script src="https://kit.fontawesome.com/b5be29a0dc.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <body>
        @include('layouts._partials.menu')
        <main>
            @yield('content')
        </main>
        <main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        var typed = new Typed('.type5', {
        strings: ['<span><i class="fas fa-tools"></i></span> FACTORIAL',
                    '<span><i class="fas fa-car"></i></span> LIBAERTAD'],
        typeSpeed:60,backSpeed:60,loop:true});

        var typed = new Typed('.type6', {
        strings: ['<span><i class="fas fa-tools"></i></span> FACTORIAL ',
                    '<span><i class="fas fa-car"></i></span> LIBAERTAD'],
        typeSpeed:60,backSpeed:60,loop:true});

        var typed = new Typed('.type7', {
        strings: ['<span><i class="fas fa-tools"></i></span> FACTORIAL',
                    '<span><i class="fas fa-car"></i></span> LIBAERTAD'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script>
        var typed = new Typed('.type', {
        strings: ['<span><i class="fas fa-tools"></i></span> EXPERTOS',
                    '<span><i class="fas fa-car"></i></span> CONFIANZA'
                    ,'<span><i class="fas fa-gears"></i></span> PRECISION'],
        typeSpeed:60,backSpeed:60,loop:true});
        var typed = new Typed('.type1', {
        strings: ['<span><i class="fas fa-tools"></i></span> EXPERTOS',
                    '<span><i class="fas fa-car"></i></span> CONFIANZA'
                    ,'<span><i class="fas fa-gears"></i></span> PRECISION'],
        typeSpeed:60,backSpeed:60,loop:true});
        var typed = new Typed('.type2', {
        strings: ['<span><i class="fas fa-tools"></i></span> EXPERTOS',
                    '<span><i class="fas fa-car"></i></span> CONFIANZA'
                    ,'<span><i class="fas fa-gears"></i></span> PRECISION'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script>
        var typed = new Typed('.type3', {
        strings: ['<span>  <i class="fas fa-info-circle mr-2"></i></span> MAS INFORMACION'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script>
        var typed = new Typed('.type4', {
        strings: ['<span> <i class="fab fa-whatsapp"></i></span> +51 969 911 844'],
        typeSpeed:60,backSpeed:60,loop:true});
    </script>
    <script>

        $(document).ready(function() {
            let currentURL = window.location.href;  // Obtiene la URL actual

            // Iterar sobre todos los enlaces en la navegación
            $(".nav-link").each(function() {
                if ($(this).attr('href') === currentURL) {
                    $(this).addClass('active');
                }
            });
        });

    </script>
    </body>
</html>
