<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description"
        content="Website Rally CEG untuk memfasilitasi siswa-siswi SMA saat bermain babak penyisihan.">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    {{-- Scripts --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js" type="text/javascript"></script>
    {{-- End Scripts --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!----Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        body {
            min-height: 100vh;
            transition: all 0.3s ease;
        }
        .spacing{
            height: 50px;
        }
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100vh;
            width: 250px;
            padding: 10px 10px;
            background: #242526;
            transition: all 0.3s ease;
            z-index: 100;
        }

        .sidebar.close {
    
            width: 70px;

        }

        .menu {
            padding-left: 0 !important;
        }

        header {
            height: 100px;
            margin-top: 5em;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        header img {
            width: 80px;
            justify-content: center;
            align-items: center;
            transition: all 0.3s ease;
        }

        .sidebar.close img {
            width: 30px;
        }

        #content{
            position: absolute;
            top: 0;
            top: 0;
            left: 250px;
            height: 100vh;
            width: calc(100% - 250px);
            background-color: var(--body-color);
            transition: all ease-in-out 0.2s;
        }

        .sidebar.close ~ #content{
            left: 65px;
            height: 100vh;
            width: calc(100% - 65px);
        }

        .sidebar .toggle {
            position: absolute;
            top: 5%;
            right: 25px;
            height: 25px;
            width: 25px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 26px;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #fff;
        }

        .menu li {
            height: 50px;
            list-style: none;
            display: flex;
            align-items: center;
            margin-top: 10px;
        }

        .menu li i {
            min-width: 50px;
            height: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 18px;
            transition: all 0.3s ease;
            color: #ccc;
        }

        li span {
            font-size: 16px;
            font-weight: 500;
            white-space: nowrap;
            opacity: 1;
            transition: .3s;
            color: #ccc;
        }

        .sidebar.close .text {
            opacity: 0;
        }

        .sidebar .menu {
            margin-top: 20px;
        }

        li.search-box {
            border-radius: 6px;
            background-color: #3a3b3c;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        li.search-box input {
            height: 100%;
            width: 100%;
            outline: none;
            border: none;
            background-color: #3a3b3c;
            color: #ccc;
            border-radius: 6px;
            font-size: 17px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        li a {
            list-style: none;
            height: 100%;
            background-color: transparent;
            display: flex;
            align-items: center;
            height: 100%;
            width: 100%;
            border-radius: 6px;
            text-decoration: none;
            transition: all 0.3s ease;
        }

        li a:hover {
            background-color: #fff;
        }

        li a:hover .icon,
        li a:hover .text {
            color: #242526;
        }
        @media screen and (max-width:900px){
            header{
                margin-top:5%;
                height: 40px;
            }

            header img {
                width: 40px;
                justify-content: left;
                align-items: center;
                transition: all 0.3s ease;
            
            }
            .sidebar.close img {
                width: 30px;
                display: none;
                transition: all 0.3s ease;
            }
            .sidebar {
                position: fixed;
                top: 0;
                left: 0;
                height: 100vh;
                width: 250px;
                padding: 10px 10px;
                background: #242526;
                transition: all 0.3s ease;
                z-index: 100;
                overflow-y: scroll;
            }
        }

        @media screen and (max-width:576px){
            .nav-link{
                font-size: 16px;
            }

            .menu li i {
                min-width: 50px;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                font-size: 16px;
                transition: all 0.3s ease;
                color: #ccc;
            }
            #content{
                position: absolute;
                top: 0;
                top: 0;
                left: 250px;
                height: 100vh;
                width: calc(100% - 250%);
                background-color: var(--body-color);
                transition: none;
            }
        }
    </style>
</head>

<body style="background: url('{{ asset('assets') }}/background/background.png') center / cover no-repeat fixed">

    <div class="wrapper">
        <nav class="sidebar close">
            <header>
                <img src="{{ asset('assets/logo/Logo CEG.png') }}" class="img-fluid logo">
                <i class="fa-solid fa-bars toggle"></i>
            </header>

            <ul class="menu">

                <li class="nav-link">
                    <a href="#"  style=" font-size: 18px !important;">
                        <i class="fa-solid fa-house icon"></i>
                        <span class="text">Home</span>
                    </a>
                </li>

                {{-- <li class="nav-link">
                        <a href="#">
                            <i class="fa-sharp fa-solid fa-chart-simple icon"></i>
                            <span class="text">Revenue</span>
                        </a>
                    </li>
     --}}
                {{-- <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-bell icon"></i>
                            <span class="text">Notifications</span>
                        </a>
                    </li> --}}

                {{-- <li class="nav-link">
                        <a href="#">
                            <i class="fa-solid fa-wallet icon"></i>
                            <span class="text">Wallets</span>
                        </a>
                    </li> --}}

                    <li class="nav-link">
                        <a href="{{ route('penpos.historybattle') }}"
                            style="color:aquamarine; font-weight: bold">
                            <i class="fa-solid fa-clock icon"></i>
                            <span class="text">Histori</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="{{ route('penpos.HomePenpos') }}">
                            <i class="fa-solid fa-tent icon"></i>
                            <span class="text">Halaman Penpos</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a aria-current="page" href="{{ route('logout') }}"
                        style="color:red; font-weight: bold;"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fa-solid fa-right-from-bracket icon"></i>
                            <span class="text">Logout</span>    
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </li>
                
            </ul>
        </nav>

        <div id="content" style="">
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>

    {{-- <!--Main layout-->
    <main style="margin-top: 58px;">
        <div class="container pt-4">
            @yield('content')
        </div>
    </main> --}}
    {{-- <!--Main layout-->

        <main class="py-4">
            @yield('content')
        </main>
    </div> --}}

    {{-- <script>
        $(document).ready(function(){
            $("#sidebarCollapse").on('click',function(){
                $("#sidebar").toggleClass('active');
            });
        });
    </script> --}}

    <script>
        const body = document.querySelector('body'),
            sidebar = body.querySelector('nav'),
            toggle = body.querySelector(".toggle");

        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        })
    </script>
</body>

</html>
