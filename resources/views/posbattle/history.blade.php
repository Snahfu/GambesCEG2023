{{-- @php
    dd($penposteams);
@endphp --}}
<!DOCTYPE html>
<html lang="en">
<head>
     <!--Bootstrap-->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--End Bootstrap-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penpos - History Battle</title>
    
    <!--Font-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--End Font-->

    <!--Style-->
    <style>
        body{
            background-color: #f1f5fd;
        }
        *{
            font-family: 'Poppins', sans-serif;
        }
        .card{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
    <!--End Style-->

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
    <div class="container py-5">
        <div class="row">
            <div class="card p-0">

                <!--Header-->
                <div class="card-header pt-3" style="background-color: white;text-align: center;">
                    <h1 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">Histori</h1>
                </div>
                <!--End Header-->

                <!--Card Body-->
                <div class="card-body mt-2">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Nama Pos</th>
                                <th scope="col">Nama Tim</th>
                                <th scope="col">Status</th>
                                <th scope="col">Jam Ditambah</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($penposteams->count())

                                @foreach ($penposteams as $eachPenpos)
                                    <tr>
                                        <td>{{ $namapos }}</td>
                                        <td>Team {{ $eachPenpos->teams_id }}</td>
                                        <td>{{ $eachPenpos->hasil }}</td>
                                        <td>{{ $eachPenpos->jam->format('H:i') }}</td>
                                    </tr>
                                @endforeach
                                
                            @else
                                <p class="text-center fs-4">No History Found</p>
                            @endif
                            
                        </tbody>
                        </table>
                        <div class="d-flex justify-content-end">
                            {{ $penposteams->links('pagination::bootstrap-4') }}
                        </div>
                </div>
                <!--End Card Body-->
            </div>
        </div>
    </div>
</body>
</html>