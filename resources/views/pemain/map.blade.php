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

        .table-responsive{
            width: 80vw;
            border: 2px solid #7d5b40;
            border-radius: 5px;
        }
        table td img{
            width: 72px;
            height: 72px !important;
        }
        table td{
            width: 96px !important;
            height: 96px ;
            text-align: center;
        }
        .card-map{
            border: 0px solid black;
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2);
            background: #f7f5cd;
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
        @media screen and (max-width:578px){
            table td img{
                width: 42px !important;
                height: 42px !important;
            }
            table td{
                width: 58px !important;
                height: 58px !important;
            }
            .table-responsive{
                
            }
        }
    </style>



    <!--Coin & Buy Sell Button-->

    {{-- <div class="atas d-flex justify-content-center">
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
    </div> --}}

    <!--End-->
    <div class="spacing"></div>

    <div class="row">
        <!--Map Section-->
        <div class="col d-flex justify-content-center">
            {{-- <div class="card text-center">

                <!--Map Header-->
                <div class="card-header">
                    <h1>MAP</h1>
                </div>
                <!--End Map Header-->

                <!--Map-->
                <div class="card-body "> --}}
                    <div class="card card-map">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-borderless" style="font-family: sans-serif; font-size: 12px">
                                    <tr>
                                        <td colspan="7" class="bg-info" style="text-align:center;vertical-align:middle" focus><h1>MARKET</h1></td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(1)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[0]["tipe"]."/".$allpenpos[0]["tipe"].$allpenpos[0]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-1">
                                        </td>
                                        <td style="background:#98AF22;"></td>
                                        <td style="background:#98AF22;"></td>
                                        <td style="background:#98AF22;"></td>
                                        <td onclick="pos(9)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[8]["tipe"]."/".$allpenpos[8]["tipe"].$allpenpos[8]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-9">
                                        </td>
                                        <td style="background:#98AF22;"></td>
                                        <td onclick="pos(30)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[29]["tipe"]."/".$allpenpos[29]["tipe"].$allpenpos[29]["id"].$allpenpos[29]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-30">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(2)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[1]["tipe"]."/".$allpenpos[1]["tipe"].$allpenpos[1]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-2">
                                        </td>
                                        <td style="background:#98AF22;"></td>
                                        <td style="background:#98AF22;"></td>
                                        <td style="background:#98AF22;"></td>
                                        <td onclick="pos(10)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[9]["tipe"]."/".$allpenpos[9]["tipe"].$allpenpos[9]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-10">
                                        </td>
                                        <td style="background:#98AF22;"></td>
                                        <td onclick="pos(29)" style="background:#98AF22;">
                                            <img src="{{ asset("assets/images/".$allpenpos[28]["tipe"]."/".$allpenpos[28]["tipe"].$allpenpos[28]["id"].$allpenpos[28]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-29">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(3)" style="background: #AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[2]["tipe"]."/".$allpenpos[2]["tipe"].$allpenpos[2]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-3">
                                        </td>
                                        <td style="background:  #AABC32;"></td>
                                        <td style="background: #AABC32;"></td>
                                        <td style="background: #AABC32;"></td>
                                        <td onclick="pos(11)" style="background: #AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[10]["tipe"]."/".$allpenpos[10]["tipe"].$allpenpos[10]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-11">
                                        </td>
                                        <td style="background: #AABC32;"></td>
                                        <td onclick="pos(28)" style="background: #AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[27]["tipe"]."/".$allpenpos[27]["tipe"].$allpenpos[27]["id"].$allpenpos[27]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-28">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(4)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[3]["tipe"]."/".$allpenpos[3]["tipe"].$allpenpos[3]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-4">
                                        </td>
                                        <td style="background:#AABC32;"></td>
                                        <td style="background:#AABC32;"></td>
                                        <td style="background:#AABC32;"></td>
                                        <td onclick="pos(12)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[11]["tipe"]."/".$allpenpos[11]["tipe"].$allpenpos[11]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-12">
                                        </td>
                                        <td style="background:#AABC32;"></td>
                                        <td onclick="pos(27)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[26]["tipe"]."/".$allpenpos[26]["tipe"].$allpenpos[26]["id"].$allpenpos[26]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-27">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(5)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[4]["tipe"]."/".$allpenpos[4]["tipe"].$allpenpos[4]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-5">
                                        </td>
                                        <td style="background:#AABC32;"></td>
                                        <td style="background:#AABC32;"></td>
                                        <td style="background:#AABC32;"></td>
                                        <td onclick="pos(13)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[12]["tipe"]."/".$allpenpos[12]["tipe"].$allpenpos[12]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-13">
                                        </td>
                                        <td style="background:#AABC32;"></td>
                                        <td onclick="pos(26)" style="background:#AABC32;">
                                            <img src="{{ asset("assets/images/".$allpenpos[25]["tipe"]."/".$allpenpos[25]["tipe"].$allpenpos[25]["id"].$allpenpos[25]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-26">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(6)" style="background: #BCC943;" >
                                            <img src="{{ asset("assets/images/".$allpenpos[5]["tipe"]."/".$allpenpos[5]["tipe"].$allpenpos[5]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-6">
                                        </td>
                                        <td style="background: #BCC943;"></td>
                                        <td style="background: #BCC943;"></td>
                                        <td style="background: #BCC943;"></td>
                                        <td onclick="pos(14)" style="background: #BCC943;" >
                                            <img src="{{ asset("assets/images/".$allpenpos[13]["tipe"]."/".$allpenpos[13]["tipe"].$allpenpos[13]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-14">
                                        </td>
                                        <td style="background: #BCC943;"></td>
                                        <td onclick="pos(31)" style="background:#BCC943;">
                                            <img src="{{ asset("assets/images/".$allpenpos[30]["tipe"]."/".$allpenpos[30]["tipe"].$allpenpos[30]["id"].$allpenpos[30]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-31">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(7)" style="background:#BCC943;">
                                            <img src="{{ asset("assets/images/".$allpenpos[6]["tipe"]."/".$allpenpos[6]["tipe"].$allpenpos[6]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-7">
                                        </td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td onclick="pos(15)" style="background:#BCC943;">
                                            <img src="{{ asset("assets/images/".$allpenpos[14]["tipe"]."/".$allpenpos[14]["tipe"].$allpenpos[14]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-15">
                                        </td>
                                        <td style="background:#BCC943;"></td>
                                        <td onclick="pos(32)" style="background:#BCC943;">
                                            <img src="{{ asset("assets/images/".$allpenpos[31]["tipe"]."/".$allpenpos[31]["tipe"].$allpenpos[31]["id"].$allpenpos[31]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-32">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td onclick="pos(8)" style="background:#c1931c;">
                                            <img src="{{ asset("assets/images/".$allpenpos[7]["tipe"]."/".$allpenpos[7]["tipe"].$allpenpos[7]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-8">
                                        </td>
                                        <td style="background:#c1931c;"></td>
                                        <td style="background:#c1931c;"></td>
                                        <td style="background:#c1931c;"></td>
                                        <td onclick="pos(33)" style="background:#c1931c;">
                                            <img src="{{ asset("assets/images/".$allpenpos[32]["tipe"]."/".$allpenpos[32]["tipe"].$allpenpos[32]["id"].$allpenpos[32]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-33">
                                        </td>
                                        <td style="background:#c1931c;"></td>
                                        <td onclick="pos(34)" style="background:#c1931c;">
                                            <img src="{{ asset("assets/images/".$allpenpos[33]["tipe"]."/".$allpenpos[33]["tipe"].$allpenpos[33]["id"].$allpenpos[33]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-34">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="7" style="background:#c1931c;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row1 --}}
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(25)" style="background:#FFE07B;">
                                            <img src="{{ asset("assets/images/".$allpenpos[24]["tipe"]."/".$allpenpos[24]["tipe"].$allpenpos[24]["id"].$allpenpos[24]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-25">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row2 --}}
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(24)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[23]["tipe"]."/".$allpenpos[23]["tipe"].$allpenpos[23]["id"].$allpenpos[23]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-24">
                                        </td>
                                        <td style="background:#FFE063;"></td>
                                        <td onclick="pos(36)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[35]["tipe"]."/".$allpenpos[35]["tipe"].$allpenpos[35]["id"].$allpenpos[35]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-36">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row3 --}}
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(23)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[22]["tipe"]."/".$allpenpos[22]["tipe"].$allpenpos[22]["id"].$allpenpos[22]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-23">
                                        </td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td onclick="pos(16)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[15]["tipe"]."/".$allpenpos[15]["tipe"].$allpenpos[15]["id"].$allpenpos[15]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-16">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row4 --}}
                                        <td onclick="pos(22)" style="background:#FFE07B;">
                                            <img src="{{ asset("assets/images/".$allpenpos[21]["tipe"]."/".$allpenpos[21]["tipe"].$allpenpos[21]["id"].$allpenpos[21]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-22">
                                        </td>
                                        <td style="background:#FFE063;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#FFE063;"></td>
                                        <td onclick="pos(17)" style="background:#FFE07B;">
                                            <img src="{{ asset("assets/images/".$allpenpos[16]["tipe"]."/".$allpenpos[16]["tipe"].$allpenpos[16]["id"].$allpenpos[16]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-17">
                                        </td>
                                    </tr>
                                    <tr>
                                        {{-- Row5 --}}
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(21)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[20]["tipe"]."/".$allpenpos[20]["tipe"].$allpenpos[20]["id"].$allpenpos[20]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-21">
                                        </td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td style="background:#BCC943;"></td>
                                        <td onclick="pos(18)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[17]["tipe"]."/".$allpenpos[17]["tipe"].$allpenpos[17]["id"].$allpenpos[17]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-18">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row6 --}}
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(35)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[34]["tipe"]."/".$allpenpos[34]["tipe"].$allpenpos[34]["id"].$allpenpos[34]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-35">
                                        </td>
                                        <td style="background:#FFE063;"></td>
                                        <td onclick="pos(19)" style="background:#FFE063;">
                                            <img src="{{ asset("assets/images/".$allpenpos[18]["tipe"]."/".$allpenpos[18]["tipe"].$allpenpos[18]["id"].$allpenpos[18]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-19">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                    </tr>
                                    <tr>
                                        {{-- Row7 --}}
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#FFE07B;"></td>
                                        <td onclick="pos(20)" style="background:#FFE07B;">
                                            <img src="{{ asset("assets/images/".$allpenpos[19]["tipe"]."/".$allpenpos[19]["tipe"].$allpenpos[19]["id"].$allpenpos[19]["status"].".png") }}" alt="gambar not found" width="60px" height="60px" id="pos-20">
                                        </td>
                                        <td style="background:#FFE07B;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                        <td style="background:#4AB6F7;"></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    
                {{-- </div>
                <!--End Map-->

            </div>
        </div> --}}
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
                        $("#detailPosTipe").html(data.penposData['deskripsi']);
                        $("#detailPos").modal('show');
                    }
                }
            });
        }

        Pusher.logToConsole = true;

        var pusher = new Pusher('84dc78a7edce33295399', {
            cluster: 'ap1'
        });

        var channel = pusher.subscribe('penposChannel');
        channel.bind('penposStatus', (e) => {
            var idPos = 'pos-' + e.penposStatus.penpos.id;
            let posImage = document.getElementById(idPos);
            var assetBaseUrl = "{{ asset('') }}";
            var stringAsset = "";
            if (e.penposStatus.penpos.tipe == "Jasa")
            {
                stringAsset = "assets/images/" + e.penposStatus.penpos.tipe + "/" + e.penposStatus.penpos.tipe + e.penposStatus.penpos.status + ".png"
                posImage.src = assetBaseUrl + stringAsset;
            }
            else {
                stringAsset = "assets/images/" + e.penposStatus.penpos.tipe + "/" + e.penposStatus.penpos.tipe + e.penposStatus.penpos.id + e.penposStatus.penpos.status + ".png"
                posImage.src = assetBaseUrl + stringAsset;
            }
        });
    </script>
@endsection
