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
    background-color: green;
}
</style>
<div class="container px-4 py-2">
<div class="card">
    <div class="card-header text-center">
        <h3 style ="font">Buy Card</h3>
    </div>
    <div class="card-body">
        {{-- START Baris Pertama --}}
        <div class="row justify-content-center">
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 1</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 2</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 3</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 4</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 5</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
        </div>
        {{-- END Baris Pertama --}}

        {{-- START Baris Kedua --}}
        <div class="row justify-content-center">
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 6</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 7</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 8</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 9</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 10</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
        </div>
        {{-- END Baris Kedua --}}

        {{-- START Baris Ketiga --}}
        <div class="row justify-content-center">
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 11</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 12</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 13</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 14</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
            <div class="card m-2 col-2 p-0">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/74/White_domesticated_duck%2C_stretching.jpg/800px-White_domesticated_duck%2C_stretching.jpg" class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h4 class="card-title">Kartu 15</h4>
                    <h5 class="card-subtitle mb-2 text-muted"><i class="fa-solid fa-coins" id="icon-coin"></i><span>        100</span></h5>
                    <button class="btn btn-primary">Buy</button>
                </div>
            </div>
        </div>
        {{-- END Baris Ketiga --}}
    </div>
</div>
</div>
@endsection
