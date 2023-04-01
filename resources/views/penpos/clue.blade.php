@extends('penpos.app')

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
        .disabled {
            display: none;
            visibility: hidden;
        }

        #disableRow {
            cursor: pointer;
            position: relative;
            display: flex;
            align-content: center;
            justify-content: center
        }

        #disableRow p {
            opacity: 1;
            width: 100%;
            height: auto;
            transition: .5s ease;
        }

        #disableRow:hover p {
            opacity: 0;
        }

        #disableRow span {
            transition: .5s ease;
            opacity: 0;
            text-align: center;
            position: absolute;
            width: 50%;
            height: auto;
        }

        #disableRow:hover span {
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

    {{-- Start Pos --}}
    <!-- Card Container -->
    <div class="card mx-5 my-5">

        <!-- Header -->
        <div class="card-header" style="text-align: center;">
            <h1><b>CLUE</b></h1>
        </div>

        <!-- Body -->
        <div class="card-body px-4">

            <!-- Pilih Tim -->
            <h2><b>Pilih Tim</b></h2>
            <select class="form-select" id="teamselector">
                <option selected hidden>-- Pilih Pemain --</option>
                {{-- semua team yang belum main di pos ini --}}
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                @endforeach
            </select>
            <!-- End Pilih Tim -->
            <br>

            <!-- Pilih Clue -->
            <h2><b>Pilih Clue</b></h2>
            <select name="clue-part1" id="clue_part1">
                <option value="">-- Pilih Kartu 1 --</option>
                <option value="1">Item 1</option>
                <option value="2">Item 2</option>
                <option value="3">Item 3</option>
            </select> +
            <select name="clue-part2" id="clue_part2">
                <option value="">-- Pilih Kartu 2 --</option>
                <option value="1">Item 1</option>
                <option value="2">Item 2</option>
                <option value="3">Item 3</option>
            </select> +
            <select name="clue-part3" id="clue_part3">
                <option value="">-- Pilih Kartu 3 --</option>
                <option value="1">Item 1</option>
                <option value="2">Item 2</option>
                <option value="3">Item 3</option>
            </select>
            <!-- End Pilih Clue -->
            <br>
            <br>
            <h5 id="hasilCheck">Hasil : </h5>
            <div class="d-flex justify-content-center mb-4">
                <button type="submit" id="btnCheck" class="btn btn-outline-primary">Check</button>
            </div>
        </div>

    </div>
    <!-- End Card Container -->
    {{-- End Pos --}}
    {{-- Scripts --}}
    <script type="text/javascript">
        $(document).on("change", 'select[id="teamselector"]', function() {
            var idTeam = document.getElementById("teamselector");
            $.ajax({
                    type: "POST",
                    url: "{{ route('penpos.getTeamKartu') }}", // Route 
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': idTeam.value,
                    }
                })
                .done(function(data) {
                    if (data['status'] == "success") {
                        var temporaryString = "";
                        var arrayKartu = data['inventoryKartus'];
                        if(!Array.isArray(arrayKartu))
                        {
                            arrayKartu = Object.values(arrayKartu);
                        }
                        if (arrayKartu.length == 0) {
                            temporaryString += "<option value = nokartu> Tidak terdapat kartu </option>"
                        }
                        arrayKartu.forEach(kartu => {
                            temporaryString += "<option value=" + kartu.id + " data-idprimary="+kartu.pivot.id+">" + kartu.nama +
                                "</option>"
                        });
                        $('#clue_part1').html(temporaryString);
                        $('#clue_part2').html(temporaryString);
                        $('#clue_part3').html(temporaryString);
                    }
                });
        });

        $(document).on("click", "#btnCheck", function() {
            var kombinasi1 = document.getElementById("clue_part1"); 
            var kombinasi2 = document.getElementById("clue_part2");
            var kombinasi3 = document.getElementById("clue_part3");
            var idTeam = document.getElementById("teamselector");
            var kombinasiIdKartu = $("#clue_part1").find('option:selected').data("idprimary") + "," + $("#clue_part2").find('option:selected').data("idprimary") + "," + $("#clue_part3").find('option:selected').data("idprimary")
            var kombinasiKartu = kombinasi1.value + "," + kombinasi2.value + "," + kombinasi3.value
            $.ajax({
                    type: "POST",
                    url: "{{ route('penpos.checkKombinasi') }}", // Route 
                    data: {
                        '_token': "{{ csrf_token() }}",
                        'id': idTeam.value,
                        'kombinasi' : kombinasiKartu,
                        'idkombinasi' : kombinasiIdKartu,
                    }
                })
                .done(function(data) {
                    if (data['status'] == "success") {
                        $('#hasilCheck').html("Hasil : " + data['msg']);
                    }
                    else {
                        $('#hasilCheck').html("Error : " + data['msg']);
                    }
                });
        });
    </script>
@endsection
