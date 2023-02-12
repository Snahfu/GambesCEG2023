@extends('layouts.app')
@section('content')
<style>
*{
    font-family: 'Poppins', 'sans-serif';
}
.btn-primary{
    background-color: white;
    color: blue;
}
.btn-primary:hover{
    background-color: red;
}
</style>
<div class="container px-4 py-2">
<div class="card">
    <div class="card-header text-center">
        <h3 style ="font">Sell Card</h3>
    </div>
    <div class="card-body">
        <div class="row justify-content-left">
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 1</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Sell</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
