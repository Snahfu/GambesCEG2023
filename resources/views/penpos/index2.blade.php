@extends('penpos.app')

@section('content')
    {{-- Bootstrap Select --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .select2{
            width: 200px;
            max-width: 200px;
        }
        .battle{
            width: 95vw;
            height: ;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 60px;
            height: 34px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            -webkit-transition: .4s;
            transition: .4s;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
        }

        input:checked+.slider {
            background-color: #2196F3;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(26px);
        }
        #card-body-wrapper{
            display: flex;
            flex-direction: column;
        }
        
        @media screen and (max-width:576px){
            #card-body-wrapper{
                display: flex;
                flex-direction: column;
            }
            #teamSelectId{
                display: flex;
                flex-direction: column;
            }
            
            #kondisi-section{
                display: flex;
                align-items: center;
                justify-content: left;
                flex-direction: column;
            }
            #koin-section{
                display: flex;
                flex-direction: column;
                border: 2px solid black;
                border-radius: 5px;
                padding: 8px;
            }
            #koin-section .select2{
                max-width: 200px;
                width: fit-content;
            }

            #koin-section .team-select{
                display: flex;
                align-items: center;
            }
            #submit-section{
                display: flex;
                align-items: center;
                justify-content: center;
            }
            
        }
    </style>

    <main>
        <div class="container battle my-3">
            <div class="card">
                <div class="card-header">
                    <h1 style="font-weight: bold;text-align:center;">Pos Battle 1</h1>
                </div>
                <div class="card-body" id="card-body-wrapper">
                    <section id="teamSelectId">
                        {{-- Select Team 1 --}}
                        <div class="team-select">
                            <label for="team1" style="width: 68px;">Team 1 :</label>
                            <select name="team[]" id="team1" class="select2">
                                <option value="" selected disabled>- Pilih Team-</option>
                                @for ($i = 1; $i <= 65; $i++)
                                <option value="">Team {{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        {{-- Select Team 2 --}}
                        <div class="team-select my-2 ">
                            <label for="team2" style="width: 68px;">Team 2 :</label>
                            <select name="team[]" id="team2" class="select2">
                                <option value="" selected disabled>- Pilih Team-</option>
                                @for ($i = 1; $i <= 65; $i++)
                                <option value="">Team {{$i}}</option>
                                @endfor
                            </select>
                        </div>
                        {{-- Select Team 3 --}}
                        <div class="team-select">
                            <label for="team3" style="width: 68px;">Team 3 :</label>
                            <select name="team[]" id="team3" class="select2">
                                <option value="" selected disabled>- Pilih Team-</option>
                                @for ($i = 1; $i <= 65; $i++)
                                <option value="">Team {{$i}}</option>
                                @endfor
                            </select>
                        </div>
                    </section>
                    <section id="kondisi-section" class="my-4">

                        <label for="kondisi" class="">Kondisi :</label>
                        <select name="team[]" id="kondisi" class="select2 mx-2">
                            <option value="" selected disabled>- Pilih Kondisi-</option>
                            <option value="">Menang</option>
                            <option value="">Seri</option>
                        </select>

                    

                        {{-- klu ada menang ini muncul --}}
                        <label for="pemenang" class="" style="margin: 4px 0 0 0;">Pemenang :</label>
                        <select name="team[]" id="pemenang" class="select2">
                            <option value="" selected disabled>- Pilih Pemenang-</option>
                            <option value="">Team 1</option>
                            <option value="">Team 2</option>
                            <option value="">Team 3</option>
                        </select>
                    </section>
                    <label for="koin-section">Input Koin :</label>
                    <section id="koin-section">
                        {{-- Coin Team 1 --}}
                        <div class="team-select">
                            <label for="team1Coin" style="max-width: 150px;">"Nama Team 1"</label>
                            <span class="mx-1">:</span>
                            <select name="team[]" id="team1Coin" class="select2">
                                <option value="" selected disabled>-Pilih Coin-</option>
                                <option value="">100</option>
                            </select>
                        </div>
                        {{-- Select Team 2 --}}
                        <div class="team-select my-2 ">
                            <label for="team2Coin" style="max-width: 150px;">"Nama Team 2"</label>
                            <span class="mx-1">:</span>
                            <select name="team[]" id="team2Coin" class="select2">
                                <option value="" selected disabled>-Pilih Coin-</option>
                                <option value="">100</option>
                            </select>
                        </div>
                        {{-- Select Team 3 --}}
                        <div class="team-select">
                            <label for="team3Coin" style="max-width: 150px;">"Nama Team 3"</label>
                            <span class="mx-1">:</span>
                            <select name="team[]" id="team3Coin" class="select2">
                                <option value="" selected disabled>-Pilih Coin-</option>
                                <option value="">100</option>
                            </select>
                        </div>
                    </section>
                    <section id="submit-section" class="my-3">
                        <button type="button" class="btn btn-success">Submit</button>
                    </section>
                    <section id="statusPos">
                        <!--Button Submit-->
                        <div class="d-flex justify-content-center mb-2">
                            <select name="status[]" class="form-select" aria-label="Default select example"
                                style="text-align: center; width:210px;" onchange="updateStatus()" id="pengubahstatus">
                                <option selected hidden>-- Update Status --</option>
                                <option value="KOSONG">KOSONG</option>
                                <option value="MENUNGGU">MENUNGGU</option>
                                <option value="PENUH">PENUH</option>
                            </select>
                        </div>
                        <div class="d-flex justify-content-center mb-2  ">
                            <button type="submit" id="btnSubmit" class="btn btn-outline-primary">Update</button>
                        </div>
                    </section>
                </div>

                <div class="card-footer pt-3 pb-3 text-center bg-opacity-75" id="posFooter"
                    style="background-color: #008917; text-align: center; font-weight:bold; color:white;">
                    Status Pos : <span id="statusPos">Kosong</span>
                </div>

                {{-- Uncomment yg bawah (yg jalan) --}}
                {{-- <div class="card-footer pt-3 pb-3 text-center bg-opacity-75" id="posFooter"
                    style="{{ $penposData->status == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }} text-align: center; font-weight:bold; color:white;">
                    Status Pos : <span id="statusPos">{{ $penposData->status == 'KOSONG' ? 'KOSONG' : 'PENUH' }}</span>
                </div> --}}

            </div>
        </div>
    </main>
    <script>
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection