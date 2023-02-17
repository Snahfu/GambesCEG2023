@extends('layouts.app')

@section('content')
<div class="container px-sm-4 py-2">
    <div class="row">
        <div class="card p-0">

            <!--Header-->
            <div class="card-header pt-3" style="background-color: white;text-align: center;">
                <h1 style="color:rgba(0, 0, 0, 0.704); font-weight: bold">Histori</h1>
            </div>
            <!--End Header-->

            <!--Card Body-->
            <div class="card-body mt-2">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nama Pos</th>
                            <th scope="col">Nama Tim</th>
                            <th scope="col">Status</th>
                            <th scope="col">Jam Ditambah</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($penposteams->count())
                            @foreach ($penposteams as $eachPenpos)
                                <tr>
                                    <td>{{ $namapos }}</td>
                                    {{-- <td>Team {{ $eachPenpos->teams_id }}</td> --}}
                                    <td>{{ $namateams->find($eachPenpos->teams_id)->nama }}</td>
                                    <td>{{ $eachPenpos->hasil }}</td>
                                    <td>{{ $eachPenpos->jam->format('H:i') }}</td>
                                </tr>
                            @endforeach
                        @else
                            <p class="text-center fs-4">No History Found</p>
                        @endif

                    </tbody>
                </table>
                <div class="d-flex justify-content-end">
                    {{ $penposteams->links('pagination::bootstrap-4') }}
                </div>
            </div>
            <!--End Card Body-->
        </div>
    </div>
</div>
@endsection
