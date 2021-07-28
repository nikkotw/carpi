<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @php
    header('Access-Control-Allow-Headers: *');
    @endphp
    <title>Spark - @yield("title")</title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{url('css/bootstrap.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}" crossorigin="anonymous">
    <link rel="stylesheet" href="{{url('css/styles.css')}}">
    <link rel="stylesheet" href="{{url('css/alertify.css')}}">
    <link rel="stylesheet" type="text/css" href="{{url('css/datatables.min.css')}}" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.7.6/css/mdb.min.css" /> -->
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Styles -->
    <style>
        .dropdown-submenu {
        position: relative;
        }

        .dropdown-submenu a::after {
        transform: rotate(-90deg);
        position: absolute;
        right: 6px;
        top: .8em;
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        .example::-webkit-scrollbar {
        display: none;
        }

        /* Hide scrollbar for IE and Edge */
        body {
        -ms-overflow-style: none;
        }

        .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-left: .1rem;
        margin-right: .1rem;
        }
    </style>
</head>

<body class="example">
    <div>

        <nav class="navbar navbar-expand-lg navbar-light bg-red">
            <a class="navbar-brand " href="{{url('/')}}"> <img src="/img/logo.png" alt=""></a>

            <button class="bg-red navbar-toggler" type="button" data-toggle="collapse"
                data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">

                    <li class="nav-item dropdown">
                        <a class="bg-red nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Presupuestos
                        </a>
                        <div class="bg-red dropdown-menu " aria-labelledby="navbarDropdownMenuLink"> 
                            <a class="bg-red dropdown-item" href="{{url('presupuestar')}}">Presupuestar</a>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="form-inline row my-2 my-lg-0">
                
                <div class="w-100"></div>
                <div class="w-100"></div>
                <div class="col col-lg text-right">
                <a class="sucursal font-weight-bold" href="{{url('logout')}}">Cerrar sesión</a>
                </div>
            </div>


        </nav>
    </div>
    <div class="content">
        <div name="app" id="app">

            @yield('contenido')

        </div>
    </div>

    <script src="{{url('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{url('js/alertify.js')}}"></script>
    <script type="text/javascript" src="{{url('js/datatables.min.js')}}" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script src="https://unpkg.com/vue-chartjs/dist/vue-chartjs.min.js"></script>
    <script>
        $('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
            if (!$(this).next().hasClass('show')) {
                $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
            }
            var $subMenu = $(this).next(".dropdown-menu");
            $subMenu.toggleClass('show');


            $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
                $('.dropdown-submenu .show').removeClass("show");
            });


            return false;
            });
    </script>
    @yield('script')

</body>

</html>
