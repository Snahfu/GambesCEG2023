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
        .atas{
            position: sticky;
            top: 0;
            z-index: 1;
          
        }

        .row-mobile-order{
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            background: #ffffff;
            border-radius: 20px;
        }
        .mascot{
            position:static;
            width: 80px;
            height: auto;
        }
        #colKiri, #colKanan{
            text-align: center;
            min-width: 300px;
            max-width:400px;
            
        }

        .img-container{

        }
        #icon-coin,#icon-kel{
            font-size:30px;
            margin-right:20px;
        }
        @media screen and (max-width:900px){
            .atas{
                position: relative;
                z-index: 1;
          
            }
            #colKiri, #colKanan{
                text-align: center;
                width: fit-content;
                background: none;
                border-radius: 0px 0 0 0px;
            }
            #colKiri{
                border-radius: 0px 0 0 0px;
                
            }
            #colKanan{
                border-radius: 0 0px 0px 0;
            }
            .row-mobile-order {
                display: flex;
                flex-direction: column;
                background: #ffffff;
                border-radius: 20px;
                box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            } 
            .column-order1{
                padding-top:12px;
                order:3;
                padding-bottom:12px;
            }
            .column-order2{
                order: 1;
                background: none !important;
                display: none;
            }
            .column-order3{
                padding-top:12px;
                order: 2;
            }
            .spacing{
                height: 25px;
            }
        }
    </style>
    


        <!--Coin & Buy Sell Button-->
        
            <div class="atas d-flex justify-content-center">
                <div class="row d-flex justify-content-between row-mobile-order">
                    <div class="col d-flex align-items-center justify-content-center column-order1" id="colKiri">
                        <div class="d-flex align-items-center px-3 py-1" style="background: rgba(0,0,0,0.1);text-align:left;border-radius:20px;min-width:150px">
                            <i class="fa-solid fa-coins" id="icon-coin"></i> 
                            <span id="playerCoin">100</span>
                        </div>
                        
                    </div>
                    <div class="col column-order2" style="text-align: center;background: #ffffff;">
                        <div class="img-container">
                           <img src="{{ asset('assets/images/mascot.png') }}" class="img-fluid mascot"> 
                        </div>
                        
                    </div>
                    <div class="col d-flex align-items-center justify-content-center column-order3" id="colKanan" >
                        <div class="d-flex align-items-center py-1 px-3" style="background: rgba(0,0,0,0.1);text-align:left;;border-radius:20px">
                            <i class="fa-solid fa-user-large" id="icon-kel"></i>
                            <span id="namaKelompok">Ini nama kelompok</span>
                        </div>
                    </div>
                </div>
            </div>

            <a href="{{ route('pemain.buymenu') }}" class="btn btn-success">
                <span class="sidebar-text">Buy</span>
            </a>
            <a href="{{ route('pemain.sellmenu') }}" class="btn btn-danger">
                <span class="sidebar-text">Sell</span>
            </a>
       
{{--         
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
            </ul> --}}

        <!--End-->
    <div class="spacing"></div>

    <div class="row">
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
                    <div class="table-responsive">
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
                </div>
                <!--End Map-->

            </div>
        </div>
        <!--End Map Section-->

    </div>
    <script></script>
@endsection
