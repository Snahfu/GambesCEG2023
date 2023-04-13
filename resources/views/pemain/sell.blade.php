@extends('pemain.app')
@section('content')
    <style>
        * {
            font-family: 'Poppins', 'sans-serif';
        }

        .btn-primary {
            background-color: white;
            color: blue;
        }

        .btn-primary:hover {
            background-color: green;
        }
        #cardSell{
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

        @media screen and (max-width:992px) {
            .card-container {
                display: grid;
                grid-template-columns: auto auto auto auto;
            }

            .card-title {
                font-size: 16px;
            }

            .card-subtitle {
                font-size: 14px;
            }

            .btn-primary {
                padding: 3px 12px 3px 12px !important;
                font-size: 14px;
            }
        }

        @media screen and (max-width:768px) {
            .card-container {
                display: grid;
                grid-template-columns: auto auto auto;
            }
        }

        @media screen and (max-width:576px) {
            .card-container {
                display: grid;
                grid-template-columns: auto auto;
            }

            .cardItems .card-body {
                padding: 10px;
            }

            .card-title {
                font-size: 14px;
            }

            .card-subtitle {
                font-size: 12px;
            }

            .btn-primary {
                padding: 3px 12px 3px 12px !important;
                font-size: 12px;
            }
        }

        /* End of Responsive Grid */
    </style>
    <div class="container px-sm-4 py-2">
        <div class="card" id="cardSell">
            {{-- <div class="card-header text-center">
                <h1 style="color:rgba(0, 0, 0, 1); font-weight: bold; text-align:center">Buy</h1>
            </div> --}}
            <div class="card-body">
                <h1 style="color:rgba(0, 0, 0, 1); font-weight: bold; text-align:center">Sell Card</h1>
                <div class="inline-spacing">
                    <div class="card-container">
                        @foreach ($inventoryKartus as $kartu)
                            <div class="card col-2 p-0 cardItems">
                                <img src="{{ asset('assets/images/'.$kartu->url_gambar) }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body text-center" style="padding: 8px;">
                                    {{-- <h4 class="card-title">{{ $kartu->nama }}</h4> --}}
                                    {{-- <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins"
                                            id="icon-coin"></i><span>
                                            50</span></h5> --}}
                                    {{-- <p style="margin: 0;"><span class="badge bg-danger my-1">100</span></p> --}}
                                    {{-- <button class="btn btn-success w-100" onclick="sell({{ $kartu->pivot->id }})" style="padding: 3px 6px">
                                        <i class="fa-regular fa-money-bill-1 mx-1"></i>Sell</button> --}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Tambah clue inventory --}}
            <div class="card-body mt-2">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">Daftar Clue</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($inventoryClues)
                                @foreach ($inventoryClues as $clue)
                                    <tr>
                                        <td>{{ $clue->nama }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <p class="text-center fs-4">No Clue Found</p>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function sell(id) {
            // Ubah data di database
            $.ajax({
                type: "POST",
                url: "{{ route('pemain.sellcard') }}", // Route 
                data: {
                    '_token': "{{ csrf_token() }}",
                    'id': id
                },
                success: function(data) {
                    var pesan = data.msg
                    alert(pesan);
                    location.reload();
                }
            });

        }
    </script>
@endsection
