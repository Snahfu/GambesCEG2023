@extends('penpos.app')

@section('content')
    {{-- Bootstrap Select --}}
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <style>
        .select2 {
            width: 200px;
            max-width: 200px;
        }

        .sembunyi {

            display: none;
            visibility: hidden;
        }

        .battle {
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

        #card-body-wrapper {
            display: flex;
            flex-direction: column;
        }

        @media screen and (max-width:576px) {
            #card-body-wrapper {
                display: flex;
                flex-direction: column;
            }

            #teamSelectId {
                display: flex;
                flex-direction: column;
            }

            #kondisi-section {
                display: flex;
                align-items: center;
                justify-content: left;
                flex-direction: column;
            }

            #koin-section {
                display: flex;
                flex-direction: column;
                border: 2px solid black;
                border-radius: 5px;
                padding: 8px;
            }

            #koin-section .select2 {
                max-width: 200px;
                width: fit-content;
            }

            #koin-section .team-select {
                display: flex;
                align-items: center;
            }

            #submit-section {
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
                    <h1 style="font-weight: bold;text-align:center;">{{ $penposData->nama }}</h1>
                </div>
                <div class="card-body" id="card-body-wrapper">
                    <form action="{{ route('penpos.insertHasil') }}" method="post">
                        @csrf
                        <section id="teamSelectId">
                            {{-- Select Team 1 --}}
                            <div class="team-select my-2">
                                <label for="team1" style="width: 68px;">Team 1 :</label>
                                <select name="team[]" id="team1" class="select2">
                                    <option value="-" selected disabled>- Pilih Team -</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Select Team 2 --}}
                            <div class="team-select my-2 ">
                                <label for="team2" style="width: 68px;">Team 2 :</label>
                                <select name="team[]" id="team2" class="select2">
                                    <option value="-" selected disabled>- Pilih Team -</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Select Team 3 --}}
                            <div class="team-select my-2 " id="team3-container">
                            </div>

                            @if ($penposData->jumlahTim == '3')
                                <div id="addTeam" class="d-flex justify-content-center">
                                    <button type="button" class="btn btn-outline-secondary" id="addTeamBtn">Add
                                        Team
                                        3</button>
                                </div>
                            @endif
                        </section>
                        <section id="kondisi-section" class="my-4">
                            <label for="kondisi" class="">Kondisi :</label>
                            <select name="kondisi" id="kondisi" disabled class="select2 mx-2">
                                <option value="" selected disabled>- Pilih Kondisi-</option>
                                <option value="Menang">Menang</option>
                                <option value="Seri">Seri</option>
                            </select>
                            {{-- klu ada menang ini muncul --}}
                            <div id="pemenang-container">
                            </div>
                        </section>
                        <label for="koin-section">Input Koin :</label>
                        <section id="koin-section">
                            {{-- Coin Team 1 --}}
                            <div class="team-select">
                                <label for="team1Coin" style="max-width: 150px;" id="label1">"Nama Team 1"</label>
                                <span class="mx-1">:</span>
                                <select name="koin[]" id="team1Coin" class="select2">
                                    <option value="" selected disabled>-Pilih Coin-</option>
                                    @php
                                        $arrayKoin = explode("," , $penposData->koin);
                                    @endphp
                                    @foreach ($arrayKoin as $koin)
                                        <option value="{{$koin}}">{{$koin}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Coin Team 2 --}}
                            <div class="team-select">
                                <label for="team2Coin" style="max-width: 150px;" id="label2">"Nama Team 2"</label>
                                <span class="mx-1">:</span>
                                <select name="koin[]" id="team2Coin" class="select2">
                                    <option value="" selected disabled>-Pilih Coin-</option>
                                    @php
                                        $arrayKoin = explode("," , $penposData->koin);
                                    @endphp
                                    @foreach ($arrayKoin as $koin)
                                        <option value="{{$koin}}">{{$koin}}</option>
                                    @endforeach
                                </select>
                            </div>
                            {{-- Coin Team 3 --}}
                            <div class="team-select" id="team3-koin-container">
                            </div>
                        </section>
                        <section id="submit-section" class="my-3">
                            <button type="button" class="btn btn-success" id="btnSubmit">Submit</button>
                        </section>
                    </form>

                    <section id="statusPosContainer">
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
                    </section>

                </div>

                {{-- Uncomment yg bawah (yg jalan) --}}
                <div class="card-footer pt-3 pb-3 text-center bg-opacity-75" id="posFooter"
                    style="{{ $penposData->status == 'KOSONG' ? 'background-color: #008917; ' : ($penposData->status == 'PENUH' ? 'background-color:#e2626b;' : 'background-color:#f0ad4e;') }} text-align: center; font-weight:bold; color:white;">
                    Status Pos : <span
                        id="statusPos">{{ $penposData->status == 'KOSONG' ? 'KOSONG' : ($penposData->status == 'PENUH' ? 'PENUH' : 'MENUNGGU') }}</span>
                </div>

            </div>
        </div>

        {{-- Modal --}}
        <div class="modal fade" id="submitModal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Warning!</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="submitModalBody">
                        Silahkan pilih/hapus tim 3 terlebih dahulu!
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Modal --}}

    </main>
    <script>
        var globalTeamPlayer = 2;
        $(document).ready(function() {
            $('.select2').select2();
        });

        cbChange("#team1", "#team2");
        cbChange("#team2", "#team1");

        $("#btnSubmit").on("click", (e) => {
            e.preventDefault()
            // Pengecekan Tim 3 Kosong
            var pesan = "Berhasil menambahkan data!";
            var statusValidasi = "success";
            for (let index = 1; index <= globalTeamPlayer; index++) {
                var idTeam = "#team" + index + "";
                var idKoin = "#team" + index + "Coin";
                // Pengecekan Pemain
                if ($(idTeam).val() == null) {
                    // Perbaruhi pesan dan statusValidasi
                    pesan = "Silahkan pilih nama tim " + index + " terlebih dahulu!"
                    statusValidasi = "error";
                    // Set pesan di modal
                    $("#submitModalBody").html(pesan)
                    // Break
                    break
                }
                // Pengecekan Koin
                if ($(idKoin).val() == null) {
                    // Perbaruhi pesan dan statusValidasi
                    pesan = "Silahkan pilih koin yang diperoleh tim " + index + " terlebih dahulu!"
                    statusValidasi = "error";
                    // Set pesan di modal
                    $("#submitModalBody").html(pesan)
                    // Break
                    break
                }
            }
            // Pengecekan Kondisi
            var idKondisi = "#kondisi";
            if ($(idKondisi).val() == null) {
                // Perbaruhi pesan dan statusValidasi
                pesan = "Silahkan pilih kondisi terlebih dahulu!"
                statusValidasi = "error";
                // Set pesan di modal
                $("#submitModalBody").html(pesan)
            }
            else if($(idKondisi).val() == "Menang"){
                // Pengecekan Hasil
                var idHasil = "#pemenang";
                if ($(idHasil).val() == null) {
                    // Perbaruhi pesan dan statusValidasi
                    pesan = "Silahkan pilih hasil tim siapa yang menang terlebih dahulu!"
                    statusValidasi = "error";
                    // Set pesan di modal
                    $("#submitModalBody").html(pesan)
                }
            }
            if (statusValidasi == "error") {
                // Tampilkan modal
                $("#submitModal").modal('toggle')
            } else {
                $("form").submit()
            }
        })

        // Disable combobox kondisi apabila terdapat combobox team yang belum terpilih
        function cbChange(id1, id2, id3 = null) {
            $(document).on("change", id1, function() {
                if ($(id2 + " option:selected").text() == "- Pilih Team -" || $(id3 + " option:selected").text() ==
                    "- Pilih Team -") {
                    $("#kondisi").attr("disabled", false)

                } else {
                    $("#kondisi").attr("disabled", false)
                    $("#pemenang").html("")
                    $("#pemenang").html(
                        `<option value="" selected disabled>- Pilih Pemenang -</option>
                                <option value="${$("#team1 option:selected").val()}">${$("#team1 option:selected").text()}</option>
                                <option value="${$("#team2 option:selected").val()}">${$("#team2 option:selected").text()}</option>
                                ${($("#team3 option:selected").val()!=undefined?`<option value="${$("#team3 option:selected").val()}">${$("#team3 option:selected").text()}</option>`:``)}`
                    )
                }
                if (id1 == "#team1") $("#label1").text($("#team1 option:selected").text());
                if (id1 == "#team2") $("#label2").text($("#team2 option:selected").text());
                if (id1 == "#team3") $("#label3").text($("#team3 option:selected").text());
            });
        }


        // Menampilkan combobox pemenang berdasarkan kondisi
        $("#kondisi").on("change", function() {
            if ($(this).val() == "Menang") {
                $("#pemenang-container")
                    .html(
                        `<label for="pemenang" class="" style="margin: 4px 0 0 0;">Pemenang :</label>
                            <select name="pemenang" id="pemenang" class="select2">
                                <option value="" selected disabled>- Pilih Pemenang -</option>
                                <option value="${$("#team1 option:selected").val()}">${$("#team1 option:selected").text()}</option>
                                <option value="${$("#team2 option:selected").val()}">${$("#team2 option:selected").text()}</option>
                                ${($("#team3 option:selected").val()!=undefined?`<option value="${$("#team3 option:selected").val()}">${$("#team3 option:selected").text()}</option>`:``)}
                            </select>`);
                $("#pemenang").select2();
                return
            }
            $("#pemenang-container").html("");
        });

        // Menambahkan baris team 3 untuk pemilihan tim dan koin
        $(document).on("click", "#addTeamBtn", function() {
            globalTeamPlayer = 3
            $("#team3-container").html(`<label for="team3" style="width: 68px;">Team 3 :</label>
                            <select name="team[]" id="team3" class="select2">
                                <option value="" selected disabled>- Pilih Team -</option>
                                {{-- @for ($i = 1; $i <= 65; $i++)
                                    <option value="">Team {{ $i }}</option>
                                @endfor --}}
                                @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                @endforeach
                            </select>`);
            $("#team3").select2();

            $("#team3-koin-container").html(`<label for="team3Coin" style="max-width: 150px;" id="label3">"Nama Team 3"</label>
                            <span class="mx-1">:</span>
                            <select name="koin[]" id="team3Coin" class="select2">
                                <option value="" selected disabled>-Pilih Coin-</option>
                                @php
                                    $arrayKoin = explode("," , $penposData->koin);
                                @endphp
                                @foreach ($arrayKoin as $koin)
                                    <option value="{{$koin}}">{{$koin}}</option>
                                @endforeach
                            </select>`)
            $("#team3Coin").select2();
            $("#kondisi").attr("disabled", false)
            $("#addTeamBtn").addClass("sembunyi");
            $(this).parent().html(`<button type="button" class="btn btn-outline-secondary" id="removeTeamBtn">Remove
                                        Team
                                        3</button>`)

            cbChange("#team1", "#team2", "#team3");
            cbChange("#team2", "#team3", "#team1");
            cbChange("#team3", "#team2", "#team1");
        });

        // Menghapus tim 3
        $(document).on("click", "#removeTeamBtn", function() {
            globalTeamPlayer = 2
            $(this).parent()
                .html(
                    `<button type="button" class="btn btn-outline-secondary" id="addTeamBtn">Add
                                        Team
                                        3</button>`)

            $("#team3-container").html("");
            $("#team3-koin-container").html("");
            $("#pemenang").html("")
            $("#pemenang").html(
                `<option value="" selected disabled>- Pilih Pemenang -</option>
                                <option value="${$("#team1 option:selected").val()}">${$("#team1 option:selected").text()}</option>
                                <option value="${$("#team2 option:selected").val()}">${$("#team2 option:selected").text()}</option>
                                ${($("#team3 option:selected").val()!=undefined?`<option value="${$("#team3 option:selected").val()}">${$("#team3 option:selected").text()}</option>`:``)}`
            )
        });


        // UPDATE STATUS
        let statusPos = document.getElementById("statusPos"); //text tulisannya
        let posFooter = document.getElementById("posFooter"); //backgroundnya danger, warning f0ad4e, success
        function updateStatus() {
            // Ambil status yang diubah
            let statusSekarang = $('#pengubahstatus').val()

            // Ubah tampilan Front End
            if (statusSekarang == "PENUH") {
                posFooter.style.backgroundColor = '#e2626b';
            } else if (statusSekarang == "MENUNGGU") {
                posFooter.style.backgroundColor = '#f0ad4e';
            } else {
                posFooter.style.backgroundColor = '#008917';
            }
            statusPos.innerHTML = statusSekarang;

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
                    // statusPos.innerHTML = statusSekarang;
                });
        }
    </script>
@endsection
