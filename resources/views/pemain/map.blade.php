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
                        <table class="table table-borderless" style="font-family: sans-serif; font-size: 12px">
                            <tr>
                                <td colspan="7" class="bg-info" style="font-size: 20px;">MARKET</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[0]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(1)" id="pos-1">Jasa 1</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[8]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(9)" id="pos-9">Jasa 9</td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[29]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(30)" id="pos-30">Single 10</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[1]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(2)" id="pos-2">Jasa 2</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[9]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(10)" id="pos-10">Jasa 10</td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[28]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(29)" id="pos-29">Single 9</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[2]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(3)" id="pos-3">Jasa 3</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[10]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(11)" id="pos-11">Jasa 11</td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[27]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(28)" id="pos-28">Single 8</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[3]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(4)" id="pos-4">Jasa 4</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[11]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(12)" id="pos-12">Jasa 12</td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[26]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(27)" id="pos-27">Single 7</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[4]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(5)" id="pos-5">Jasa 5</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[12]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(13)" id="pos-13">Jasa 13</td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[25]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(26)" id="pos-26">Single 6</td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[5]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(6)" id="pos-6">Jasa 6</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[13]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(14)" id="pos-14">Jasa 14</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[6]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(7)" id="pos-7">Jasa 7</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[14]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(15)" id="pos-15">Jasa 15</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                            </tr>
                            <tr>
                                <td style="{{ $allpenpos[7]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(8)" id="pos-8">Jasa 8</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                            </tr>
                            <tr>
                                <td colspan="7"></td>
                            </tr>
                            <tr>
                                {{-- Row1 --}}
                                <td></td>
                                <td></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[24]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(25)" id="pos-25">Single 5</td>
                                <td style="background:cyan;"></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                {{-- Row2 --}}
                                <td></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[23]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(24)" id="pos-24">Single 4</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td></td>
                            </tr>
                            <tr>
                                {{-- Row3 --}}
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[22]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(23)" id="pos-23">Single 3</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[15]['status'] == 'KOSONG' ? 'background-color: #008917; ' : ($allpenpos[15]['status'] == 'MENUNGGU' ? 'background-color:#f0ad4e;' : 'background-color:#e2626b;') }}"
                                    onclick="pos(16)" id="pos-16">Battle 1</td>
                                <td style="background:cyan;"></td>
                            </tr>
                            <tr>
                                {{-- Row4 --}}
                                <td style="{{ $allpenpos[21]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(22)" id="pos-22">Single 2</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[16]['status'] == 'KOSONG' ? 'background-color: #008917; ' : ($allpenpos[16]['status'] == 'MENUNGGU' ? 'background-color:#f0ad4e;' : 'background-color:#e2626b;') }}"
                                    onclick="pos(17)" id="pos-17">Battle 2</td>
                            </tr>
                            <tr>
                                {{-- Row5 --}}
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[20]['status'] == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }}"
                                    onclick="pos(21)" id="pos-21">Single 1</td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[17]['status'] == 'KOSONG' ? 'background-color: #008917; ' : ($allpenpos[17]['status'] == 'MENUNGGU' ? 'background-color:#f0ad4e;' : 'background-color:#e2626b;') }}"
                                    onclick="pos(18)" id="pos-18">Battle 3</td>
                                <td style="background:cyan;"></td>
                            </tr>
                            <tr>
                                {{-- Row6 --}}
                                <td></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[18]['status'] == 'KOSONG' ? 'background-color: #008917; ' : ($allpenpos[18]['status'] == 'MENUNGGU' ? 'background-color:#f0ad4e;' : 'background-color:#e2626b;') }}"
                                    onclick="pos(19)" id="pos-19">Battle 4</td>
                                <td style="background:cyan;"></td>
                                <td></td>
                            </tr>
                            <tr>
                                {{-- Row7 --}}
                                <td></td>
                                <td></td>
                                <td style="background:cyan;"></td>
                                <td style="{{ $allpenpos[19]['status'] == 'KOSONG' ? 'background-color: #008917; ' : ($allpenpos[19]['status'] == 'MENUNGGU' ? 'background-color:#f0ad4e;' : 'background-color:#e2626b;') }}"
                                    onclick="pos(20)" id="pos-20">Battle 5</td>
                                <td style="background:cyan;"></td>
                                <td></td>
                                <td></td>
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

        // window.Echo.channel('penposChannel').listen('.penposStatus', (e) => {
        //     var idPos = 'pos-' + e.penposStatus.penpos.id;
        //     let posFooter = document.getElementById(idPos);

        //     if (e.penposStatus.penpos.status == 'KOSONG') {
        //         posFooter.style.backgroundColor = '#008917';
        //     } else if (e.penposStatus.penpos.status == 'PENUH') {
        //         posFooter.style.backgroundColor = '#e2626b';
        //     } else {
        //         posFooter.style.backgroundColor = '#f0ad4e';
        //     }

        // });

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;

        var pusher = new Pusher('84dc78a7edce33295399', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('penposChannel');
        channel.bind('penposStatus', (e) => {
            var idPos = 'pos-' + e.penposStatus.penpos.id;
            let posFooter = document.getElementById(idPos);

            if (e.penposStatus.penpos.status == 'KOSONG') {
                posFooter.style.backgroundColor = '#008917';
            } else if (e.penposStatus.penpos.status == 'PENUH') {
                posFooter.style.backgroundColor = '#e2626b';
            } else {
                posFooter.style.backgroundColor = '#f0ad4e';
            }
        });
    </script>
@endsection
