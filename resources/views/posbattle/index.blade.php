@extends('layouts.app')

@section('content')
    <!--Style-->
    <style>
        body {
            background-color: #f1f5fd;
        }

        * {
            font-family: 'Poppins', sans-serif;
        }

        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
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

        /* Disable Team Third Row  */
        .disabled{
            display: none;
            visibility: hidden;
        }
        #disableRow{
            cursor:pointer;
            position: relative;
            display: flex;
            align-content: center;
            justify-content: center
        }
        #disableRow p{
            opacity: 1;
            width: 100%;
            height: auto;
            transition: .5s ease;
        }
        #disableRow:hover p{
            opacity: 0;
        }
        #disableRow span{
            transition: .5s ease;
            opacity: 0;
            text-align: center;
            position: absolute;
            width: 50%;
            height: auto;
        }
        #disableRow:hover span{
            opacity: 1;
            background-color: lightcoral;
            color: white;
            border-radius: 20px;
        }

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }
    </style>
    <!--End Style-->

    {{-- Pos --}}
    <div class="row">
        <div class="card p-0">

            {{-- Header --}}
            <div class="card-header text-center" style="background-color:#ffffff;">
                <h2 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">{{ $penposData->nama }}</h2>
                <p>{{ $penposData->deskripsi }}</p>
            </div>
            {{-- End Header --}}

            <!--Card Body-->
            <div class="card-body">

                <form action="{{ route('penpos.insertHasil') }}" method="post">
                    @csrf
                    <!-- Tim 1 -->
                    <div class="row d-flex justify-content-center mb-4 pt-4"
                        style="text-align: center; font-weight: bold;">
                        <div class="col-2" style="font-size: 18px;">
                            Nama Tim 1:
                        </div>
                        <div class="col-2">
                            <select name="team[]" id="team1" class="form-select"
                                aria-label="Default select example" style="text-align: center;">
                                <option selected hidden>--Pilih Pemain 1--</option>
                                {{-- semua team yang belum main di pos ini --}}
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="hasil[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Hasil--</option>
                                <option value="menang">Menang</option>
                                <option value="seri">Seri</option>
                                <option value="kalah">Kalah</option>
                            </select>
                        </div>
                        <div class="col-1" style="font-size: 18px;">
                            Dari
                        </div>
                        <div class="col-2">
                            <select name="lawan[]" id="lawan1" class="form-select"
                                aria-label="Default select example" style="text-align: center;">
                                <option selected hidden>--Pilih Pemain 1--</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="koin[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Koin--</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                    </div>
                    <!--End Tim 1-->

                    <!-- Tim 2 -->
                    <div class="row d-flex justify-content-center mb-4"
                        style="text-align: center; font-weight: bold;">
                        <div class="col-2" style="font-size: 18px;">
                            Nama Tim 2:
                        </div>
                        <div class="col-2">
                            <select name="team[]" id="team2" class="form-select"
                                aria-label="Default select example" style="text-align: center;">
                                <option selected hidden>--Pilih Pemain 2--</option>
                                {{-- semua team yang belum main di pos ini --}}
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="hasil[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Hasil--</option>
                                <option value="menang">Menang</option>
                                <option value="seri">Seri</option>
                                <option value="kalah">Kalah</option>
                            </select>
                        </div>
                        <div class="col-1" style="font-size: 18px;">
                            Dari
                        </div>
                        <div class="col-2">
                            <select name="lawan[]" id="lawan2" class="form-select"
                                aria-label="Default select example" style="text-align: center;">
                                <option selected hidden>--Pilih Pemain 1--</option>
                            </select>
                        </div>
                        <div class="col-2">
                            <select name="koin[]" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Koin--</option>
                                <option value="25">25</option>
                                <option value="50">50</option>
                                <option value="75">75</option>
                                <option value="100">100</option>
                            </select>
                        </div>
                        {{-- <div class="col-2">
                        <button type="button" class="btn btn-primary mx-2">Cek</button>
                        <button type="button" class="btn btn-primary mx-2">Reset</button>
                    </div> --}}
                    </div>
                    <!--End Tim 2-->

                    @if ($penposData->jumlahTim=="3")
                        <!--Tim 3-->
                        <div class="row d-flex justify-content-center mb-4 pb-3"
                            style="text-align: center; font-weight: bold;" >
                            <div class="col-2" style="font-size: 18px;" id="disableRow">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                        <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                    </svg>
                                </span>
                                <p> Nama Tim 3:</p>
                            </div>
                            <div class="col-2">
                                <select name="team[]" id="team3" class="form-select"
                                    aria-label="Default select example" style="text-align: center;">
                                    <option selected hidden>--Pilih Pemain 3--</option>
                                    {{-- semua team yang belum main di pos ini --}}
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-2">
                                <select name="hasil[]" class="form-select" aria-label="Default select example"
                                    style="text-align: center;">
                                    <option selected hidden>--Input Hasil--</option>
                                    <option value="menang">Menang</option>
                                    <option value="seri">Seri</option>
                                    <option value="kalah">Kalah</option>
                                </select>
                            </div>
                            <div class="col-1" style="font-size: 18px;">
                                Dari
                            </div>
                            <div class="col-2">
                                <select name="lawan[]" id="lawan3" class="form-select"
                                    aria-label="Default select example" style="text-align: center;">
                                    <option selected hidden>--Pilih Pemain 1--</option>
                                </select>
                            </div>
                            <div class="col-2">
                                <select name="koin[]" class="form-select" aria-label="Default select example"
                                    style="text-align: center;">
                                    <option selected hidden>--Input Koin--</option>
                                    <option value="25">25</option>
                                    <option value="50">50</option>
                                    <option value="75">75</option>
                                    <option value="100">100</option>
                                </select>
                            </div>
                        </div>

                        {{-- Button Add Team 3 --}}
                        <div class="d-flex justify-content-center mb-4 pb-3">
                            <button type="button" class="btn btn-outline-secondary disabled" id="addTeam">Add Team 3</button>
                        </div>
                        
                        <!--End Tim 3-->
                    @endif

                    <!--Button Submit-->
                    <div class="d-flex justify-content-center mb-4">
                        <select name="status[]" class="form-select" aria-label="Default select example"
                        style="text-align: center; width:210px;" onchange="updateStatus()" id="pengubahstatus">
                            <option selected hidden>-- Update Status --</option>
                            <option value="KOSONG">KOSONG</option>
                            <option value="MENUNGGU">MENUNGGU</option>
                            <option value="PENUH">PENUH</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-center mb-4">
                        <button type="submit" class="btn btn-outline-primary">Submit</button>
                    </div>
                    <!--End Button Submit-->

                </form>

            </div>

            <div class="card-footer pt-3 pb-3 text-center bg-opacity-75" id="posFooter"
                style="{{ $penposData->status == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }} text-align: center; font-weight:bold; color:white;">
                Status Pos : <span
                    id="statusPos">{{ $penposData->status == 'KOSONG' ? 'KOSONG' : 'PENUH' }}</span>
            </div>

            <!--End Footer-->
        </div>
    </div>
    {{-- End Pos --}}

    {{-- Scripts --}}
    <script type="text/javascript">
        // auto fill combobox #lawanX dengan kelompok yang telah dipilih 
        @if ($penposData->jumlahTim=="3")
            function cbChange(id1, id2, id3, id4) {
                $(id1).on("change", function() {
                    $(id2).html("");
                    $(id2).append(
                        `<option value="${$(id3+" option:selected").val()}">${$(id3+" option:selected").text()}</option>`
                    );
                    $(id2).append(
                        `<option value="${$(id4+" option:selected").val()}">${$(id4+" option:selected").text()}</option>`
                    );
                });
            }

            cbChange("#team1", "#lawan2", "#team1", "#team3");
            cbChange("#team1", "#lawan3", "#team1", "#team2");

            cbChange("#team2", "#lawan1", "#team2", "#team3");
            cbChange("#team2", "#lawan3", "#team1", "#team2");

            cbChange("#team3", "#lawan2", "#team1", "#team3");
            cbChange("#team3", "#lawan1", "#team3", "#team2");


            // remove baris tim 3
            $(document).on("click","#disableRow", function () {
                $(".card-body").children().children().eq(3).html("");
                $("#addTeam").removeClass("disabled");
            });
            // Add baris team 3
            $(document).on("click","#addTeam",function(){
                $(".card-body").children().children().eq(3).html(`<div class="col-2" style="font-size: 18px;" id="disableRow">
                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
                                        </svg>
                                    </span>
                                    <p> Nama Tim 3:</p>
                                </div>
                                <div class="col-2">
                                    <select name="team[]" id="team3" class="form-select"
                                        aria-label="Default select example" style="text-align: center;">
                                        <option selected hidden>--Pilih Pemain 3--</option>
                                        {{-- semua team yang belum main di pos ini --}}
                                        @foreach ($teams as $team)
                                            <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-2">
                                    <select name="hasil[]" class="form-select" aria-label="Default select example"
                                        style="text-align: center;">
                                        <option selected hidden>--Input Hasil--</option>
                                        <option value="menang">Menang</option>
                                        <option value="seri">Seri</option>
                                        <option value="kalah">Kalah</option>
                                    </select>
                                </div>
                                <div class="col-1" style="font-size: 18px;">
                                    Dari
                                </div>
                                <div class="col-2">
                                    <select name="lawan[]" id="lawan3" class="form-select"
                                        aria-label="Default select example" style="text-align: center;">
                                        <option selected hidden>--Pilih Pemain 1--</option>
                                    </select>
                                </div>
                                <div class="col-2">
                                    <select name="koin[]" class="form-select" aria-label="Default select example"
                                        style="text-align: center;">
                                        <option selected hidden>--Input Koin--</option>
                                        <option value="25">25</option>
                                        <option value="50">50</option>
                                        <option value="75">75</option>
                                        <option value="100">100</option>
                                    </select>
                                </div>`);
                $("#addTeam").addClass("disabled");
            })
        @else
            function cbChange(id1, id2, id3) {
                $(id1).on("change", function() {
                    $(id2).html("");
                    $(id2).append(
                        `<option value="${$(id3+" option:selected").val()}">${$(id3+" option:selected").text()}</option>`
                    );
                });
            }
            cbChange("#team1", "#lawan2", "#team1");
            cbChange("#team2", "#lawan1", "#team2");
        @endif

        // UPDATE STATUS
        // let checkbox = document.getElementById("statusCheckbox"); //checkbox
        let statusPos = document.getElementById("statusPos"); //text tulisannya
        let posFooter = document.getElementById("posFooter"); //backgroundnya danger, warning f0ad4e, success
        // let combobox = document.getElementById("pengubahstatus");
        function updateStatus() {
            // Ambil status yang diubah
            let statusSekarang = $('#pengubahstatus').val()
            
            // Ubah tampilan Front End
            statusPos.innerHTML = statusSekarang;
            if(statusSekarang == "PENUH")
            {
                posFooter.style.backgroundColor = '#e2626b';
            }else if (statusSekarang == "MENUNGGU")
            {
                posFooter.style.backgroundColor = '#f0ad4e';
            }
            else {
                posFooter.style.backgroundColor = '#008917';
            }

            // Ubah data di database
            $.ajax({
                type: "POST",
                url: "{{ route('penpos.PenposUpdate') }}", // Route 
                data: {
                    '_token': "{{ csrf_token() }}",
                    'status': statusSekarang
                }
            })
            .done(function(msg) {
                // alert("Pesan: " + msg['result']);
            });
        }
        
        // checkbox.addEventListener("change", () => {
        //     if (checkbox.checked) {
        //         statusPos.innerHTML = "PENUH";
        //         $("#statusCheckbox").val('PENUH');
        //         posFooter.style.backgroundColor = '#e2626b';
        //         // posFooter.css("background-color", "red");

        //         console.log("Checkbox is checked");
        //         $.ajax({
        //                 type: "POST",
        //                 url: "{{ route('penpos.PenposUpdate') }}", // Route 
        //                 data: {
        //                     '_token': "{{ csrf_token() }}",
        //                     'status': 'PENUH'
        //                 }
        //             })
        //             .done(function(msg) {
        //                 alert("Pesan: " + msg['result']);
        //             });

        //     } else {
        //         statusPos.innerHTML = "KOSONG";
        //         $("#statusCheckbox").val('KOSONG');
        //         posFooter.style.backgroundColor = '#008917';


        //         console.log("Checkbox is not checked");

        //         $.ajax({
        //                 type: "POST",
        //                 url: "{{ route('penpos.PenposUpdate') }}", // Route 
        //                 data: {
        //                     '_token': "{{ csrf_token() }}",
        //                     'status': 'KOSONG'
        //                 }
        //             })
        //             .done(function(msg) {
        //                 alert("Pesan: " + msg['result']);
        //             });
        //     }
        // });
    </script>
@endsection
