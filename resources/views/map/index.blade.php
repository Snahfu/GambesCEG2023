<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Map</title>

    <!--Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!--End Bootstrap-->

     <!--Font-->
     <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--End Font-->

    <style>
        * {
            font-family: 'Poppins', sans-serif;
        }
        #coin{
            font-weight: bold;
        }
        .card {
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
</head>
<body style="background: url('{{ asset('assets/background/background.png') }}') center / cover no-repeat fixed">

    <div class="container ml-0 my-5 py-5">
    <div class="row">

        <!--Coin & Buy Sell Button-->
        <div class="col-1">
            <ul class="list-group list-group-flush">
                <li class="list-group-item" id="coin">Coin: <span></span></li>
                <li class="list-group-item">
                    <button type="button" class="btn btn-success">Buy</button>
                </li>
                <li class="list-group-item">
                    <button type="button" class="btn btn-danger">Sell</button>
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
    </div>
</body>
</html>