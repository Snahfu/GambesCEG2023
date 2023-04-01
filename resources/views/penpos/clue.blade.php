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
            <h5>Clue: Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem ratione, vitae accusantium
                dolores, expedita dolorem excepturi tempora unde officiis quis. Est sapiente ullam neque similique quibusdam
                facilis rem nobis?</h5>
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
                        'id' : idTeam.value,
                    }
                })
                .done(function(data) {
                    var dataBackEnd = JSON.parse(data);
                    if(dataBackEnd['status'] == "success")
                    {
                        
                    }
                });
        });
    </script>
@endsection
