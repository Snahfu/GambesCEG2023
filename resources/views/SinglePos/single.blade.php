<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Single Pos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    {{-- font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700;800&display=swap" rel="stylesheet">
    {{-- end font --}}
    <style>
        body {
            background-color: #f8fefae4
        }

        * {
            font-family: 'Poppins', 'sans-serif';
        }

        .atas {
            margin: 200px;
        }
        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
</head>

<body style="background: url('{{ asset('assets/background/background.png') }}') center / cover no-repeat fixed">
    {{-- Navbar --}}
    <div id="app" class="d-flex justify-content-center" style="z-index: 2">

        <nav class="navbar navbar-expand-md navbar-light transparent" style="width: 90%;border-radius: 20px;">
            <div class="container" style="border-radius: 20px;">
                <a class="navbar-brand" href="{{ route('HomePenpos') }}">
                    <img src="{{ asset('assets') }}/logo/Kelapa_navbar.png" alt="Kelapa" style="max-height: 40px">
                    <img src="{{ asset('assets') }}/logo/Logo CEG.png" alt="Logo CEG" style="max-height: 40px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="{{ route('historybattle') }}"
                                style="color:aquamarine; font-weight: bold">Histori</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('logout') }}"
                                style="color:red; font-weight: bold;"
                                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">Log
                                Out</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    {{-- End Navbar --}}


    {{-- Pos --}}
    <div class="container" style="margin-top: 50px">
        <div class="row">
                <div class="card p-0">
                    <form action="{{ route('insertHasil') }}" method="POST">
                        @csrf
                    {{-- Header --}}
                    <div class="card-header text-center" style="background-color:#ffffff;">
                        <h2 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">{{ $penposData->nama }}</h2>
                        <p>{{ $penposData->deskripsi }}</p>
                    </div>
                    {{-- End Header --}}

                    {{-- Body --}}
                    
                    <div class="row d-flex justify-content-center mb-4 pt-4"
                        style="text-align: center; font-weight: bold;">
                        <div class="col-2" style="font-size: 18px;">
                            Nama Tim :
                        </div>
                        <div class="col-2">
                            <select name="team[]" id="team1" class="form-select"
                                aria-label="Default select example" style="text-align: center;">
                                <option selected hidden>--Pilih Pemain 1--</option>
                                {{-- semua team yang belum main di pos ini --}}
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="hasil[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Hasil--</option>
                                <option value="menang">Menang</option>
                                <option value="kalah">Kalah</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="koin[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Koin--</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    {{-- End Body --}}
                    <!--Button Submit-->
                    <div class="d-flex justify-content-center mb-4">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                    <!--End Button Submit-->
                    </form>
                {{-- Footer --}}
                <div class="card-footer pt-3 pb-3 text-center bg-opacity-75" id="posFooter"
                style="{{ $penposData->status == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }} text-align: center; font-weight:bold; color:white;">
                Status Pos : <span
                    id="statusPos">{{ $penposData->status == 'KOSONG' ? 'KOSONG' : 'PENUH' }}</span>
                <label class="switch" style="height = 10px">
                    <input type="checkbox" id="statusCheckbox"
                        {{ $penposData->status == 'KOSONG' ? 'value=KOSONG' : 'Checked value=PENUH' }}>
                    <span class="slider round"></span>
                </label>
                </div>
                {{-- End Footer --}}
            </div>
        </div>
    </div>
    {{-- End Pos --}}
{{-- Scripts --}}
<script type="text/javascript">
    let checkbox = document.getElementById("statusCheckbox");
    let statusPos = document.getElementById("statusPos");
    let posFooter = document.getElementById("posFooter");
    checkbox.addEventListener("change", () => {
        if (checkbox.checked) {
            statusPos.innerHTML = "PENUH";
            $(checkbox).val('PENUH');
            posFooter.style.backgroundColor = '#e2626b';
            // posFooter.css("background-color", "red");

            console.log("Checkbox is checked");
            $.ajax({
                    type: "GET",
                    url: "/UpdateStatus", // Route 
                    data: {
                        'status': 'PENUH'
                    }
                })
                .done(function(msg) {
                    alert("Pesan: " + msg['result']);
                });

        } else {
            statusPos.innerHTML = "KOSONG";
            $(checkbox).val('KOSONG');
            posFooter.style.backgroundColor = '#008917';


            console.log("Checkbox is not checked");

            $.ajax({
                    type: "GET",
                    url: "/UpdateStatus", // Route 
                    data: {
                        'status': 'KOSONG'
                    }
                })
                .done(function(msg) {
                    alert("Pesan: " + msg['result']);
                });
        }
    });
</script>
</body>

</html>
