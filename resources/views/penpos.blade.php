<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Home Penpos</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        table,thead,tbody,tr,td{
            border: 1px solid black;
        }
    </style>
</head>
<body>
    <h1>Welcome To Pos {{ $penposData->tipe }}: {{ $penposData->nama }}</h1>
    <p>{{ $penposData->deskripsi }}</p>
    <input type="hidden" name="tipePos" id="tipePos" value={{ $penposData->tipe }}>

    <div>
        <h3>Pilih Team:</h3>
        {{-- combo box untuk memilih team yang akan main --}}
        <div class="selectTeamContainer">
            <label for="SelectTeam">Team:</label>
            <select name="SelectTeam" id="SelectTeam">
                {{-- semua team yang belum main di pos ini --}}
                @foreach ($teams as $team)
                    <option value="{{ $team->id }}">{{ $team->nama }}</option>
                @endforeach
            </select>
            <button id="selectBtn">Select</button>
        </div>

        <table>
            <thead>
                <tr>
                    <td>ID Team</td>
                    <td>Nama Team</td>
                    <td>Action</td>
                </tr>
            </thead>
            <tbody id="tableLobby">
    
            </tbody>
        </table>

        <form action="/insertHasilGame" method="post" id="formFinishGame">
            @csrf
            <label for="hasilGame">Hasil Games: </label>
            <input type="text" name="hasilGame" id="hasilGame" placeholder="Team A menang - Team...">
            <button type="submit" id="finishGame">Finish Games!</button>
        </form>
    </div>
    <script>
        // add selected teams to lobby table
        $('#selectBtn').on('click',()=>{
            $("#tableLobby").append("<tr><td>"+$("#SelectTeam option:selected").val()+"</td><td value="+$("#SelectTeam option:selected").val()+">"+$("#SelectTeam option:selected").text()+"</td><td><button id='remove'>Remove</button></td></tr>");
            $("#formFinishGame").append('<input type="hidden" name="teamId[]" value="'+$("#SelectTeam option:selected").val()+'">');
            // cek tipe pos
            if($("#tipePos").val()=="Single"){
                $("#selectBtn").attr("disabled", true);
            }
            if($("#tableLobby tr").length ==3){
                // tipe pos battle, maximum 3 team
                $("#selectBtn").attr("disabled", true);
            }
        })
        // remove team from lobby table and form finish game
        $(document).on("click","#remove", function () {
            this.parentNode.parentNode.remove();
            // menghapus input hidden di form
            $("#formFinishGame input[value='"+$(this.parentNode.parentNode).find("td").eq(1).attr("value")+"']").remove();
            // disable button pilih team
            if($("#tipePos").val()=="Single" ) {}$("#selectBtn").attr("disabled", false);
            if($("#tableLobby tr").length <=3) $("#selectBtn").attr("disabled", false);
        });
    </script>
</body>
</html>