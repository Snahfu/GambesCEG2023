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

        #cardBuy {
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2);
            border: 0px solid black;
            border-radius: 20px;
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
            transition: all 0.1s ease-in-out;
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2);
            border: 0px solid black;
            border-radius: 10px;
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

            .btn-success {
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

            .btn-success {
                font-size: 12px;
            }
        }

        /* End of Responsive Grid */
    </style>
    <div class="container px-sm-4 py-2">
        <div class="card" id="cardBuy">
            <div class="card-body">
                <h1 style="color:rgba(0, 0, 0, 1); font-weight: bold; text-align:center">Buy Card</h1>
                {{-- START Baris Pertama --}}
                <div class="inline-spacing">
                    <div class="card-container">
                        @foreach ($semuaKartu as $kartu)
                            <div class="card col-2 p-0 cardItems">
                                <img src="{{ asset('assets/images/' . $kartu->url_gambar) }}"
                                    class="card-img-top gambar-kartu" alt="..." data-id="{{ $kartu->id }}"
                                    data-nama="{{ $kartu->nama }}">
                                <div class="card-body text-center" style="padding: 8px;">
                                    {{-- <h5 class="card-title" style="font-size: 12px"> {{ $kartu->nama }}</h5> --}}
                                    <p style="margin: 0;"><span class="badge bg-warning my-1">100</span></p>
                                    <button class="btn btn-success w-100" onclick="buy({{ $kartu->id }})"
                                        style="padding: 3px 6px">
                                        <i class="fa-solid fa-cart-shopping mx-1"></i>Buy</button>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- END Baris Pertama --}}
            </div>
        </div>
    </div>
    {{-- Modal --}}
    <div class="modal fade" id="bigModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Informasi Kartu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" class="card-img-top" alt="..." id="bigImage">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{-- End Modal --}}

    <script>
        $(document).on("click", ".gambar-kartu", function() {
            $("#exampleModalLabel").html($(this).attr("data-nama"));
            $("#bigImage").attr("src", $(this).attr("src"));
            $("#bigModal").modal("toggle");
        });

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
