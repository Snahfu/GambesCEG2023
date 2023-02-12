@extends('layouts.app')

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
    </style>
    
    <div class="row">

        <!--Coin & Buy Sell Button-->
        <div class="col-1">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" id="coin">Coin: <span>100</span></li>
                <li class="list-group-item">
                    <a href="{{ route('pemain.buymenu') }}" class="btn btn-success">
                        <span class="sidebar-text">Buy</span>
                    </a>
                </li>
                <li class="list-group-item">

                    <a href="{{ route('pemain.sellmenu') }}" class="btn btn-danger">
                        <span class="sidebar-text">Sell</span>
                    </a>
                </li>
                <li class="list-group-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('logout') }}"
                        style="color:red; font-weight: bold;"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">Log
                        Out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
        <!--End-->

        <!--Map Section-->
        <div class="col">
            <div class="card text-center">

                <!--Map Header-->
                <div class="card-header">
                    <h1>MAP</h1>
                </div>
                <!--End Map Header-->

                <!--Map-->
                <div class="card-body p-5">
                    <table class="table table-bordered">
                        <tr>
                            <td>R1, C1</td>
                            <td>R1, C2</td>
                            <td>R1, C3</td>
                            <td>R1, C4</td>
                            <td>R1, C5</td>
                            <td>R1, C6</td>
                            <td>R1, C7</td>
                            <td>R1, C8</td>
                        </tr>
                        <tr>
                            <td>R2, C1</td>
                            <td>R2, C2</td>
                            <td>R2, C3</td>
                            <td>R2, C4</td>
                            <td>R2, C5</td>
                            <td>R2, C6</td>
                            <td>R2, C7</td>
                            <td>R2, C8</td>
                        </tr>
                        <tr>
                            <td>R3, C1</td>
                            <td>R3, C2</td>
                            <td>R3, C3</td>
                            <td>R3, C4</td>
                            <td>R3, C5</td>
                            <td>R3, C6</td>
                            <td>R3, C7</td>
                            <td>R3, C8</td>
                        </tr>
                        <tr>
                            <td>R4, C1</td>
                            <td>R4, C2</td>
                            <td>R4, C3</td>
                            <td>R4, C4</td>
                            <td>R4, C5</td>
                            <td>R4, C6</td>
                            <td>R4, C7</td>
                            <td>R4, C8</td>
                        </tr>
                        <tr>
                            <td>R5, C1</td>
                            <td>R5, C2</td>
                            <td>R5, C3</td>
                            <td>R5, C4</td>
                            <td>R5, C5</td>
                            <td>R5, C6</td>
                            <td>R5, C7</td>
                            <td>R5, C8</td>
                        </tr>
                    </table>
                </div>
                <!--End Map-->

            </div>
        </div>
        <!--End Map Section-->

    </div>
    <script></script>
@endsection
