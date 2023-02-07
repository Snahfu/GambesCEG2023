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
<body>
    <!--Nav-->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route("HomePenpos") }}">Pos Battle</a>
        </li>
        <li class="nav-item" style="font-color:red;">
            <a class="nav-link" href="#">Log Out</a>
    </ul>
    <!--End Nav-->
    <div class="container py-5">
        <div class="row">
            <div class="card p-0">

                <!--Header-->
                <div class="card-header pt-3" style="background-color: white;text-align: center;">
                    <h1>Histori</h1>
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
                </div>
                <!--End Card Body-->
            </div>
        </div>
    </div>
</body>
</html>