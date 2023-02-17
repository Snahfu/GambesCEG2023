@extends('pemain.app')

@section('content')
    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }

        #coin {
            font-weight: bold;
        }

        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }

        .atas {
            position: sticky;
            top: 0;
            z-index: 1;

        }

        .row-mobile-order {
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            border-radius: 20px;
        }

        .mascot {
            position: static;
            width: 80px;
            height: auto;
        }

        #colKiri,
        #colKanan {
            text-align: center;
            min-width: 300px;
            max-width: 400px;

        }

        .img-container {}

        #icon-coin,
        #icon-kel {
            font-size: 30px;
            margin-right: 20px;
        }

        @media screen and (max-width:900px) {
            .atas {
                position: relative;
                z-index: 1;

            }

            #colKiri,
            #colKanan {
                text-align: center;
                width: fit-content;
                background: none;
                border-radius: 0px 0 0 0px;
            }

            #colKiri {
                border-radius: 0px 0 0 0px;

            }

            #colKanan {
                border-radius: 0 0px 0px 0;
            }

            .row-mobile-order {
                display: flex;
                flex-direction: column;
                background: #ffffff;
                border-radius: 20px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            }

            .column-order1 {
                padding-top: 12px;
                order: 3;
                padding-bottom: 12px;
            }

            .column-order2 {
                order: 1;
                background: none !important;
                display: none;
            }

            .column-order3 {
                padding-top: 12px;
                order: 2;
            }

            .spacing {
                height: 25px;
            }
        }
    </style>



    <!--Coin & Buy Sell Button-->

    <div class="atas d-flex justify-content-center">
        <div class="row d-flex justify-content-between row-mobile-order">
            <div class="col d-flex align-items-center justify-content-center column-order1" id="colKiri">
                <div class="d-flex align-items-center px-3 py-1"
                    style="background: rgba(0,0,0,0.1);text-align:left;border-radius:20px;min-width:150px">
                    <i class="fa-solid fa-coins" id="icon-coin"></i>
                    <span id="playerCoin">{{ $datapemain->coin }}</span>
                </div>

            </div>
            <div class="col column-order2" style="text-align: center;background: #ffffff;">
                <div class="img-container">
                    <img src="{{ asset('assets/images/mascot.png') }}" class="img-fluid mascot">
                </div>

            </div>
            <div class="col d-flex align-items-center justify-content-center column-order3" id="colKanan">
                <div class="d-flex align-items-center py-1 px-3"
                    style="background: rgba(0,0,0,0.1);text-align:left;;border-radius:20px">
                    <i class="fa-solid fa-user-large" id="icon-kel"></i>
                    <span id="namaKelompok">{{ $datapemain->nama }}</span>
                </div>
            </div>
        </div>
    </div>

    <!--End-->
    <div class="spacing"></div>

    <div class="row">
        <!--Map Section-->
        <div class="col">
            <div class="card text-center">

                <!--Map Header-->
                <div class="card-header">
                    <h1>MAP</h1>
                </div>
                <!--End Map Header-->

                <!--Map-->
                <div class="card-body p-5">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <tr>
                                <td onclick="pos(1)">Jasa 1</td>
                                <td onclick="pos(6)">Jasa 6</td>
                                <td onclick="pos(11)">Jasa 11</td>
                                <td></td>
                                <td onclick="pos(16)">Battle 1</td>
                                <td></td>
                                <td onclick="pos(21)">Single 1</td>
                                <td onclick="pos(26)">Single 6</td>
                            </tr>
                            <tr>
                                <td onclick="pos(2)">Jasa 2</td>
                                <td onclick="pos(7)">Jasa 7</td>
                                <td onclick="pos(12)">Jasa 12</td>
                                <td></td>
                                <td onclick="pos(17)">Battle 2</td>
                                <td></td>
                                <td onclick="pos(22)">Single 2</td>
                                <td onclick="pos(27)">Single 7</td>
                            </tr>
                            <tr>
                                <td onclick="pos(3)">Jasa 3</td>
                                <td onclick="pos(8)">Jasa 8</td>
                                <td onclick="pos(13)">Jasa 13</td>
                                <td></td>
                                <td onclick="pos(18)">Battle 3</td>
                                <td></td>
                                <td onclick="pos(23)">Single 3</td>
                                <td onclick="pos(28)">Single 8</td>
                            </tr>
                            <tr>
                                <td onclick="pos(4)">Jasa 4</td>
                                <td onclick="pos(9)">Jasa 9</td>
                                <td onclick="pos(14)">Jasa 14</td>
                                <td></td>
                                <td onclick="pos(19)">Battle 4</td>
                                <td></td>
                                <td onclick="pos(24)">Single 4</td>
                                <td onclick="pos(29)">Single 9</td>
                            </tr>
                            <tr>
                                <td onclick="pos(5)">Jasa 5</td>
                                <td onclick="pos(10)">Jasa 10</td>
                                <td onclick="pos(15)">Jasa 15</td>
                                <td></td>
                                <td onclick="pos(20)">Battle 5</td>
                                <td></td>
                                <td onclick="pos(25)">Single 5</td>
                                <td onclick="pos(30)">Single 10</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <!--End Map-->

            </div>
        </div>
        <!--End Map Section-->

    </div>

    <div class="modal fade" id="detailPos" data-bs-keyboard="false" tabindex="-1" aria-labelledby="detailPosKonten"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailPosTitle"></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body flex">
                    <b>Nama Penpos : </b><b id="detailPosNama"></b>
                    <br>
                    <br>
                    <b>Status Penpos : </b><b id="detailPosStatus"></b>
                    <br>
                    <br>
                    <b>Tipe Penpos : </b><b id="detailPosTipe"></b>
                    <br>
                    <br>
                    <b>Team in Waiting : </b>
                    <br>
                    <p>Masih dalam perbaikan</p>
                </div>
            </div>
        </div>
    </div>

    <script>
        function pos(id) {
            $.ajax({
                type: "POST",
                url: "{{ route('pemain.penposDetail') }}", // Route 
                data: {
                    '_token': "{{ csrf_token() }}",
                    'pos_id': id
                },
                success: function(data) {
                    if (data.status == "success") {
                        $("#detailPosTitle").html(data.penposData['nama']);
                        $("#detailPosNama").html(data.penposData['nama']);
                        $("#detailPosStatus").html(data.penposData['status']);
                        $("#detailPosTipe").html(data.penposData['tipe']);
                        $("#detailPos").modal('show');
                    }
                }
            });
        }
    </script>
@endsection
