{{-- @php
    dd($pos);
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 40%;
            border-radius: 5px;
            padding: 16px;
            margin-top: 15px;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

    </style>
</head>
<body>
    <h1>List All Pos</h1>
    @foreach ($pos as $tiapPos)
            @if ($tiapPos->status == "KOSONG")
                <style>
                    
                .empty-pos{
                    background-color : rgb(255, 255, 255);
                }
                </style>
                <div class="card empty-pos">
            @else
                <style>
                .full-pos{
                    background-color : rgb(255, 0, 0);

                }
                </style>
                <div class="card full-pos">
            @endif
        
            <h4><b>{{ $tiapPos->nama }}</b></h4> 
            <p>Desc: {{ $tiapPos->deskripsi }}</p> 
            <p>Tipe: {{ $tiapPos->tipe }}</p> 
            <p>Status: {{ $tiapPos->status }}</p> 
            <a href="/HomePenpos"><button>Main</button></a>
            
        </div>
    @endforeach
</body>
</html>