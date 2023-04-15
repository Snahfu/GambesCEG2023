@extends('penpos.app')

@section('content')
    {{-- Bootstrap Select --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/css/bootstrap-select.min.css"
        integrity="sha512-ARJR74swou2y0Q2V9k0GbzQ/5vJ2RBSoCWokg4zkfM29Fb3vZEQyv0iWBMW/yvKgyHSR/7D64pFMmU8nYmbRkg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.18/js/bootstrap-select.min.js"></script>

    <style>
        * {
            font-family: 'Poppins', 'sans-serif';
        }

        .container-fluid {
            width: 80vw;
            height: 100vh;
        }

        .atas {
            margin: 200px;
        }

        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
            height: fit-content;
            top: 10%;
        }

        #isi-card {
            text-align: center;
            font-weight: bold;
            flex-direction: row;
            justify-content: center;
            width: 100%;
        }

        #isi-card div {
            margin: 0 16px 0 16px;
        }

        .centering-h {
            display: flex;
            justify-content: center;
        }

        .centering-v {
            display: flex;
            align-items: center;
        }

        .dropdown-menu {
            width: 250px;
            max-height: 300px;
        }

        .bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
            width: 100% !important;
            text-align: center;
        }

        .filter-option-inner-inner {
            text-align: center;
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

        /* Rounded sliders */
        .slider.round {
            border-radius: 34px;
        }

        .slider.round:before {
            border-radius: 50%;
        }

        @media screen and (max-width:768px) {
            .container-fluid {
                width: 85vw;
                height: 100vh;
            }

            #isi-card {
                flex-direction: column;
            }

            #isi-card div {
                margin: 0 8px 0 8px;
            }

        }

        @media screen and (max-width:576px) {
            .container-fluid {
                width: 90vw;
                height: 100vh;
            }

            #isi-card {
                flex-direction: column;
            }
        }
    </style>


    <div class="w-100">
        <div class="card p-0">
            <div class="card-body">
                <form action="{{ route('penpos.insertHasil') }}" method="POST">
                    @csrf
                    {{-- Header --}}
                    <div class="card-header text-center" style="background-color:#ffffff;">
                        <h2 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">{{ $penposData->nama }}</h2>
                    </div>
                    {{-- End Header --}}

                    {{-- Body --}}
                    <div class="d-flex mb-4 pt-4" id="isi-card">
                        <div class="centering-v justify-content-center" style="font-size: 18px;">
                            Nama Tim :
                        </div>
                        <div class="my-2 centering-v">
                            <!-- <select name="team[]" id="team1" class="form-select" aria-label="Default select example"
                                            style="text-align: center;">
                                            <option selected hidden>--Pilih Pemain 1--</option>
                                            {{-- semua team yang belum main di pos ini --}}
                                            {{-- @foreach ($teams as $team)
                                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                                @endforeach --}}
                                        </select> -->
                            {{-- Selection Team --}}
                            <div class="selection w-100">
                                <select name="team[]" id="team1" class="selectpicker bordered" data-live-search="true"
                                    tabindex="-1" aria-label="team">
                                    <option value ="-" selected hidden>--Pilih Pemain 1--</option>
                                    @foreach ($teams as $team)
                                        <option value="{{ $team->id }}" data-tokens="{{ $team->nama }}">
                                            {{ $team->nama }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="my-1 centering-v">
                            <select name="hasil[]" id="hasil1" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Hasil--</option>
                                <option value="Selesai">Selesai</option>
                                <option value="Tidak Selesai">Tidak Selesai</option>
                            </select>
                        </div>
                        <div class="my-2 centering-v">
                            <select name="koin[]" id="koin1" class="form-select" aria-label="Default select example"
                                style="text-align: center;">
                                <option selected hidden>--Input Koin--</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                                <option value="40">40</option>
                            </select>
                        </div>
                    </div>
                    {{-- End Body --}}

                    <!--Button Submit-->
                    <div class="d-flex justify-content-center mb-4">
                        <button type="submit" class="btn btn-warning" id="btnSubmit">Submit</button>
                    </div>
                    <!--End Button Submit-->
                </form>
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
                            Poin telah berhasil tersubmit !
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
            {{-- End Modal --}}

            {{-- Footer --}}
            <div class="card-footer pt-3 pb-3 text-center bg-opacity-75 d-flex align-items-center justify-content-center" id="posFooter"
                style="{{ $penposData->status == 'KOSONG' ? 'background-color: #008917; ' : 'background-color:#e2626b;' }} text-align: center; font-weight:bold; color:white;">
                Status Pos : <span id="statusPos" class="mx-2">{{ $penposData->status == 'KOSONG' ? 'KOSONG' : 'PENUH' }}</span>
                <label class="switch" style="height = 10px">
                    <input type="checkbox" id="statusCheckbox"
                        {{ $penposData->status == 'KOSONG' ? 'value=KOSONG' : 'Checked value=PENUH' }}>
                    <span class="slider round"></span>
                </label>
            </div>
            {{-- End Footer --}}
        </div>
    </div>
    {{-- End Pos --}}

    {{-- Scripts --}}
    <script type="text/javascript">
        $("#btnSubmit").on("click", (e) => {
            e.preventDefault()
            var pesan = "Berhasil menambahkan data!";
            var statusValidasi = "success";
            var idTeam = "#team1";
            var idHasil = "#hasil1";
            var idKoin = "#koin1";
            // Pengecekan Pemain
            if ($(idTeam).val() == "-") {
                // Perbaruhi pesan dan statusValidasi
                pesan = "Silahkan pilih nama tim terlebih dahulu!"
                statusValidasi = "error";
                // Set pesan di modal
                $("#submitModalBody").html(pesan)
            }
            // Pengecekan Hasil
            if ($(idHasil).val() == "--Input Hasil--") {
                // Perbaruhi pesan dan statusValidasi
                pesan = "Silahkan pilih hasil pada tim terlebih dahulu!"
                statusValidasi = "error";
                // Set pesan di modal
                $("#submitModalBody").html(pesan)
            }
            // Pengecekan Koin
            if ($(idKoin).val() == "--Input Koin--") {
                // Perbaruhi pesan dan statusValidasi
                pesan = "Silahkan pilih koin yang diperoleh tim terlebih dahulu!"
                statusValidasi = "error";
                // Set pesan di modal
                $("#submitModalBody").html(pesan)
            }
            if (statusValidasi == "error") {
                // Tampilkan modal
                $("#submitModal").modal('toggle')
            } else {
                $("form").submit()
            }
        });

        let checkbox = document.getElementById("statusCheckbox");
        let statusPos = document.getElementById("statusPos");
        let posFooter = document.getElementById("posFooter");

        checkbox.addEventListener("change", () => {
            if (checkbox.checked) {
                statusPos.innerHTML = "PENUH";
                $("#statusCheckbox").val('PENUH');
                posFooter.style.backgroundColor = '#e2626b';
                // posFooter.css("background-color", "red");

                console.log("Checkbox is checked");
                $.ajax({
                        type: "POST",
                        url: "{{ route('penpos.PenposUpdate') }}", // Route 
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'status': 'PENUH'
                        }
                    })
                    .done(function(msg) {
                        alert("Pesan: " + msg['result']);
                    });

            } else {
                statusPos.innerHTML = "KOSONG";
                $("#statusCheckbox").val('KOSONG');
                posFooter.style.backgroundColor = '#008917';


                console.log("Checkbox is not checked");

                $.ajax({
                        type: "POST",
                        url: "{{ route('penpos.PenposUpdate') }}", // Route 
                        data: {
                            '_token': "{{ csrf_token() }}",
                            'status': 'KOSONG'
                        }
                    })
                    .done(function(msg) {
                        alert("Pesan: " + msg['result']);
                    });
            }
        });
    </script>
@endsection
