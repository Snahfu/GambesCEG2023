@extends('penpos.app')

@section('content')
    <style>
        #cardSell {
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2);
            border: 0px solid black;
            border-radius: 20px;
        }

        /* Responsive Grid Start */
        .cardSell {
            display: flex;
        }

        .card-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
        }

        .cardItems {
            width: auto;
            margin: 15px 10px 10px 10px !important;

            box-shadow: 0 10px 10px rgba(0, 0, 0, 0.4);
            transition: all 0.1s ease-in-out;
        }

        .cardItems:hover {
            transform: translateY(-2%);
            transition: all 0.15s ease-in-out;
        }
    </style>
    <div class="container px-sm-4 py-2">
        <div class="card" id="cardSell">
            <div class="card-body mt-2">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Ranking</th>
                                <th scope="col">Nama Tim</th>
                                <th scope="col">Koin</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($leaderboard as $team)
                                <tr>
                                    <td>{{ $counter }}</td>
                                    <td>{{ $team->nama }}</td>
                                    <td>{{ $team->coin }}</td>
                                    @php
                                        $counter += 1;
                                    @endphp
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @endsection
