@extends('pemain.app')

@section('content')

    <style>
        .card{
            box-shadow: 5px 10px 20px rgba(0, 0, 0, 0.2);
            border: 0px solid black;
            border-radius: 20px;
        }
    </style>
    <div class="container px-sm-4 py-2">
        <div class="row">
            <div class="card p-0">

                <!--Header-->
                {{-- <div class="card-header pt-3" style="background-color: white;text-align: center;">
                    <h1 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">Histori</h1>
                </div> --}}
                <!--End Header-->

                <!--Card Body-->
                <div class="card-body mt-2">
                    <h1 style="color:rgba(0, 0, 0, 1); font-weight: bold; text-align:center">History</h1>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Nama Tim</th>
                                    <th scope="col">Nama Pos</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Jam Ditambah</th>
                                    <th scope="col">Koin Didapat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($penposteams->count())
                                    @foreach ($penposteams as $eachPenpos)
                                        <tr>
                                            <td>{{ $namatim }}</td>
                                            <td>{{ $namaPenpos->find($eachPenpos->teams_id)->nama }}</td>
                                            <td>{{ $eachPenpos->hasil }}</td>
                                            <td>{{ $eachPenpos->jam->format('H:i') }}</td>
                                            <td>{{ $eachPenpos->koin }}</td>
                                        </tr>
                                    @endforeach
                                @else
                                    <p class="text-center fs-4">No History Found</p>
                                @endif
    
                            </tbody>
                        </table>
                    </div>
                    
                    <div class="d-flex justify-content-end">
                        {{ $penposteams->links('pagination::bootstrap-4') }}
                    </div>
                </div>
                <!--End Card Body-->
            </div>
        </div>
    </div>
@endsection
