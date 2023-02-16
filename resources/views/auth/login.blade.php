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
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        body {
            /* min-height: 100vh; */
            height: 100%;
            transition: all 0.3s ease;
        }

        #app{
        position: fixed;
        top:0;
    }
    .navbar{
        width:100% !important;
        border-radius: 0px !important;
    }
    .card{
        background-color:rgba(255,255,255,0.8);
        border: 0px;
    }

    .btn-primary {
        color: #fff;
        background-color: #25683f;
        border-color: #25683f;
    }

    .btn-primary:hover {
        color: #fff;
        background-color: #63b6b0;
        border-color: #63b6b0;
    }

    .btn-primary:focus,
    .btn-primary.focus {
        color: #fff;
        background-color: #63b6b0;
        border-color: #63b6b0;
        box-shadow: 0 0 0 0.2rem rgba(37, 104, 63, 1);
    }


    .btn-primary:not(:disabled):not(.disabled):active,
    .btn-primary:not(:disabled):not(.disabled).active,
    .show > .btn-primary.dropdown-toggle {
        color: #fff;
        background-color: #63b6b0;
        border-color: #63b6b0;
    }

    a{
        text-decoration: none;
        color: #515940;
    }
    .navbar{
        display: none;
    }
    footer{
        display: none;
    }
    </style>
</head>

<body style="background: url('{{ asset('assets') }}/background/background.png') center / cover no-repeat fixed">

    <div class="container px-4 py-5" style="">
        <div class="content-wrapper" style="top:25%;position: relative;">
            <div class="content-header row">
                <div class="content-body">
                    <div class="auth-wrapper auth-basic px-2">
                        <div class="auth-inner my-2">
                            <div class="d-flex justify-content-center">
                                <div class="card" style="width: 400px;">
                                    <div class="card-body" style=" ">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf
                                            <h3 style="margin: 10px 0px 20px;text-align: center;">Login</h3>
                                            <h4 style="text-align: left;">Welcome to CEG 2023! 👋 </h4>
                                            <p>Please sign-in to your account</p>
    
                                            <div class="mb-3">
                                                <label for="email" class="form-label"><span></span>{{ __(' Email') }}</label>
                                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus >
                                                @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                    
                                            </div>
    
                                            <div class="mb-2">
                                            
                                                <div class="d-flex justify-content-between">
                                                    <label for="password" class="form-label">{{ __('Password') }}</label>
                                                    @if (Route::has('password.request'))
                                                        <a href="{{ route('password.request') }}"  style="font-size:12px;">
                                                            {{ __('Forgot Password?') }}
                                                        </a>
                                                    @endif
                                                </div>
                                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                                @error('password')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror 
                                            </div>
    
                                            <div class="mb-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" style="" {{ old('remember') ? 'checked' : '' }}>
    
                                                    <label class="form-check-label" for="remember">
                                                        {{ __('Remember Me') }}
                                                    </label>
                                                </div>
                                                
                                            </div>
    
                                            <div class="d-flex justify-content-center mb-3">
                                                <button type="submit" class="btn btn-primary w-100">
                                                    <h5 class="my-1">{{ __('Log In') }}</h5>
                                                </button>
                                            </div>
    
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    {{-- <div class="container py-4 px-5 card-pad d-flex justify-content-center">
        <div class="card p-4" style="border: 1px solid #242a68">
            <div class="row g-0 text-center align-items-center">
                <div class="col-md-4">
                    <img src="{{ asset('assets/logo/Logo CEG.png') }}" class="img-fluid logo">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}" class="form-floating">
                            @csrf
                            <h2 class="text-mob mb-3"><b>Selamat Datang di CEG</b></h2>
                            <div class="form-floating mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus placeholder="email" >
                                <label for="email"><span><i class="fas fa-address-book"></i></span>{{ __(' Email') }}</label>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>

                            <div class="form-floating">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="password">
                                <label for="password"><span><i class="fas fa-lock"></i></span>{{ __(' Password') }}</label>
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>

                            <div class="form-group row mt-3">
                                <div class="col-md-12">
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary btn-masuk">
                                            {{ __('Masuk') }}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
</body>
</html>
