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

        /* Responsive Grid Start */
        .cardBuy {
            display: flex;
        }

        .card-container {
            display: grid;
            grid-template-columns: auto auto auto auto auto;
        }

        .cardItems {
            width: auto;
            margin: 15px 10px 10px 10px !important;

            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.25);
            transition: all 0.1s ease-in-out;
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
        <div class="card" id="cardBuy">
            <div class="card-header text-center">
                <h3 style="font">Buy Card</h3>
            </div>
            <div class="card-body">
                {{-- START Baris Pertama --}}
                <div class="inline-spacing">
                    <div class="card-container">
                        @for ($i = 1; $i <= 15; $i++)
                            <div class="card col-2 p-0 cardItems">
                                <img src="{{ asset('assets/images/Kartu_'.$i.'.jpg') }}"
                                    class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h4 class="card-title"> {{ $semuaKartu[$i-1]->nama }}</h4>
                                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins"
                                            id="icon-coin"></i><span>
                                            100</span></h5>
                                    <button class="btn btn-primary" onclick="buy({{ $i }})">Buy</button>
                                </div>
                            </div>
                        @endfor
                    </div>
                </div>
                {{-- END Baris Pertama --}}
            </div>
        </div>
    </div>

    <script>
        function buy(id) {
            // Ubah data di database
            $.ajax({
                type: "POST",
                url: "{{ route('pemain.buycard') }}", // Route 
                data: {
                    '_token': "{{ csrf_token() }}",
                    // '_token': $('meta[name="csrf-token"]').attr('content'),
                    'id': id
                },
                success: function(data) {
                    var pesan = data.msg
                    // $("#submitText").html(pesan)
                    // $("#NotifSubmit").modal('show')
                    alert(pesan);
                }
            });

        }
    </script>
@endsection
