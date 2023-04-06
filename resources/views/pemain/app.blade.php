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
    {{-- <script src="js/app.js"></script> --}}
    {{-- <script src="{{ asset('assets/js/pusher.js') }}" type="text/javascript" defer></script> --}}
    {{-- End Scripts --}}

    <!-- Styles -->
    {{-- <link href="{{ asset('css/app.css') }}" type="text/css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
        integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> --}}
    <!----Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css" integrity="sha384-b6lVK+yci+bfDmaY1u0zE8YYJt0TZxLEAFyYSLHId4xoVvsrQu3INevFKo+Xir8e" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Pusher --}}
    <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
    {{-- Pusher end --}}

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Styles -->
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
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

        .spacing {
            height: 50px;
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

        .topbar{
            position: fixed;
            height: 64px;
            width: 100vw;
            background-color: #4B371C;
            top: 3%;
            z-index: 2;
            color: white;
            font-size: 16px;
        }

        .icon{
            font-size: 20px;
        }

        .bi-coin{
            margin-right:8px;
        }
        .mascot{
            width: 64px;
            height: 64px;

            --animate-duration: 0.75s;

        }
        .topbar .col{
            height: fit-content;
        }
        .topbar a{
            color: white;
            text-decoration: none;
        }
        #identity-wrapper{
            justify-content: space-around !important;
        }
        #identity-wrapper .bi-person-circle{
            font-size: 36px;   
        }
        .coin-container{
            display: flex;
            align-content: center;
            border-radius: 10px;
            color:#4B371C;
        }
        
        .coin-container .icon, .coin-container #playerCoin{
            font-size: 20px;
            font-weight: 600;
        }
        #logout-wrapper{
            justify-content: center !important;
        }
        #top-middle{
            width: 80%;
        }
        .top-middle-items{
            justify-content: center;
        }

        

        @media screen and (max-width:768px) {  
            #top-middle{
                width: 100%;
            }
            .top-middle-items{
                justify-content: center;
            }
            .name-container{
                display: none;
            }
            .icon{
                font-size: 20px;
            }
        }

        @media screen and (max-width:576px) {
            .icon{
                font-size: 20px;
            }
            #identity-wrapper{
                display: block;
                flex-direction: column;
                text-size-adjust: auto;
            }
            #logout-wrapper{
                justify-content: center !important;
            }
        
            .name-container{
                display: none;
            }
            #top-middle{
                width: auto;
            }
            
            
        }
        
    </style>
</head>

<body style="background: url('{{ asset('assets') }}/background/background.png') center / cover no-repeat fixed">

    <div class="wrapper">
        <div class="topbar d-flex align-items-center justify-content-center">
            <div class="row w-100">
                <div class="col-3 col-sm col-md-4 d-flex align-items-center" id="identity-wrapper">
                    <div class="name-container" style="">
                        <div class="row">
                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                <i class="bi bi-person-circle" ></i>
                            </div>
                            <div class="col-md-6 d-flex align-items-center">
                                {{--Nama Team--}}
                                Ini nama teamnnya
                            </div>
                        </div>
                         
                    </div>
                    <div class="coin-container px-2 bg-warning">
                        <i class="bi bi-coin icon"></i>
                        {{--Coin Team--}}
                        <span id="playerCoin">{{ $datapemain->coin }}</span>
                    </div>
                    
                </div>
                <div class="col-6 col-sm-5 col-md-4 d-flex align-items-center justify-content-center">
                    <div class="row d-flex align-items-center" id="top-middle">
                        <div class="col d-flex align-items-center p-0 mx-3 top-middle-items">
                            <a href="{{ route('pemain.buymenu') }}"><i class="bi bi-cart icon"></i></a>
                            
                        </div>
                        <div class="col-5 p-0 top-middle-items" style="text-align: center">
                            <a href="{{ route('pemain.HomePage') }}" onclick="animateMascot()">
                                <img src="{{ asset('assets/images/mascot.png') }}" alt="" srcset="" class="mascot none">
                            {{--     --}}
                            </a>
                        </div>
                        <div class="col d-flex align-items-center p-0 mx-3 top-middle-items">
                            <a href="{{ route('pemain.sellmenu') }}"><i class="bi bi-basket2 icon"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-3 col-sm col-md-4 px-2 d-flex align-items-center" id="logout-wrapper">
                    {{--Logout--}}
                    <a aria-current="page" href="{{ route('logout') }}" 
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();" class="d-flex align-items-center">
                        <i class="bi bi-box-arrow-right icon"></i><span style="font-size: 14px;margin-left:4px;">Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
            </div>
        </div>
        {{-- <nav class="sidebar close">
            <header>
                <img src="{{ asset('assets/logo/Logo CEG.png') }}" class="img-fluid logo">
                <i class="fa-solid fa-bars toggle"></i>
            </header>

            <ul class="menu">
                <li class="nav-link">
                    <a href="{{ route('pemain.HomePage') }}">
                        <i class="fa-solid fa-tent icon"></i>
                        <span class="text">Home</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('pemain.buymenu') }}">
                        <i class="fa-solid fa-shopping-cart icon"></i>
                        <span class="text">Buy</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="{{ route('pemain.sellmenu') }}">
                        <i class="fa-solid fa-shopping-bag icon"></i>
                        <span class="text">Sell</span>
                    </a>
                </li>
                
                <li class="nav-link">
                    <a href="{{ route('pemain.historypemain') }}" style="color:aquamarine; font-weight: bold">
                        <i class="fa-solid fa-clock icon"></i>
                        <span class="text">Histori</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a aria-current="page" href="{{ route('logout') }}" style="color:red; font-weight: bold;"
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
        </nav> --}}

        <div id="content" style="">
            <div class="spacing"></div>
            <div class="spacing" style="height: 20px"></div>
            <div class="spacing" style="height: 10px"></div>
            <div class="container-fluid py-4">
                @yield('content')
            </div>
        </div>
    </div>

    <script>
        function animateMascot(){
            const element = document.querySelector('.mascot');
            element.classList.add('animate__animated', 'animate__bounce'); 
        }

        const element = document.querySelector('.mascot');
        // element.classList.add('animate__animated', 'animate__bounceIn');
        const animation = 'bounce';
        const prefix = 'animate__';
        const animateCSS = (element, animation, prefix) =>
            // We create a Promise and return it
            new Promise((resolve, reject) => {
                const animationName = `${prefix}${animation}`;
                const node = document.querySelector(element);

                node.classList.add(`${prefix}animated`, animationName);

                // When the animation ends, we clean the classes and resolve the Promise
                function handleAnimationEnd(event) {
                    event.stopPropagation();
                    node.classList.remove(`${prefix}animated`, animationName);
                    resolve('Animation ended');
                }

                node.addEventListener('animationend', handleAnimationEnd, {once: true});
            });

        


    </script>
    {{--  --}}
    <script src="../js/app.js"></script>

</body>

</html>
