<!DOCTYPE html>
<html lang="en">
<head>
    <!--Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!--End Bootstrap-->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penpos - Battle</title>
    
    <!--Font-->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!--End Font-->

    <!--Style-->
    <style>
        body{
            background-color: #f1f5fd;
        }
        *{
            font-family: 'Poppins', sans-serif;
        }
        .card{
            box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;
        }
    </style>
    <!--End Style-->

</head>
<body>
    <!--Nav-->
    <ul class="nav justify-content-end">
        <li class="nav-item">
            <a class="nav-link active" href="#">Histori</a>
        </li>
        <li class="nav-item" style="font-color:red;">
            <a class="nav-link" href="#">Log Out</a>
    </ul>
    <!--End Nav-->

    <!--Content-->
    <div class="container py-5">
        <div class="row">
           <div class="card p-0">
           
           <!--Header-->
           <div class="card-header pt-3" style="background-color: white;text-align: center;">
                <h1>Nama Pos</h1>
            </div>
            <!--End Header-->

            <!--Card Body-->
            <div class="card-body">

                <!-- Tim 1 -->
                <div class="row d-flex justify-content-center mb-4 pt-4" style="text-align: center; font-weight: bold;">
                    <div class="col-2" style="font-size: 18px;">
                        Nama Tim 1:
                    </div>
                    <div class="col-3">
                        <select class="form-select" aria-label="Default select example" style="text-align: center;">
                            <option selected>--Pilih Pemain 1--</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                            <option value="3">Dolor</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" aria-label="Default select example"  style="text-align: center;">
                            <option selected>--Input Koin--</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="3">100</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary mx-2">Cek</button>
                        <button type="button" class="btn btn-primary mx-2">Reset</button>
                    </div>
                </div>
                <!--End Tim 1-->

                <!-- Tim 2 -->
                <div class="row d-flex justify-content-center mb-4" style="text-align: center; font-weight: bold;">
                    <div class="col-2" style="font-size: 18px;">
                        Nama Tim 2:
                    </div>
                    <div class="col-3">
                        <select class="form-select" aria-label="Default select example" style="text-align: center;">
                            <option selected>--Pilih Pemain 2--</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                            <option value="3">Dolor</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" aria-label="Default select example" style="text-align: center;">
                            <option selected>--Input Koin--</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="3">100</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary mx-2">Cek</button>
                        <button type="button" class="btn btn-primary mx-2">Reset</button>
                    </div>
                </div>
                <!--End Tim 2-->

                <!--Tim 3-->
                <div class="row d-flex justify-content-center mb-4 pb-3" style="text-align: center; font-weight: bold;">
                    <div class="col-2" style="font-size: 18px;">
                        Nama Tim 3:
                    </div>
                    <div class="col-3">
                        <select class="form-select" aria-label="Default select example" style="text-align: center;">
                            <option selected>--Pilih Pemain 3--</option>
                            <option value="1">Lorem</option>
                            <option value="2">Ipsum</option>
                            <option value="3">Dolor</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <select class="form-select" aria-label="Default select example" style="text-align: center;">
                            <option selected>--Input Koin--</option>
                            <option value="1">25</option>
                            <option value="2">50</option>
                            <option value="3">75</option>
                            <option value="3">100</option>
                        </select>
                    </div>
                    <div class="col-2">
                        <button type="button" class="btn btn-primary mx-2">Cek</button>
                        <button type="button" class="btn btn-primary mx-2">Reset</button>
                    </div>
                </div>
                <!--End Tim 3-->
                
                <!--Button Submit-->
                <div class="d-flex justify-content-center mb-4" >
                    <button type="button" class="btn btn-outline-primary">Submit</button>
                </div>
                <!--End Button Submit-->
              
            </div>
            <!--End Card Body-->
            
            <!--Footer-->
            <div class="d-flex justify-content-center pt-5 pb-5" style="border-top: 1px solid #D3D3D3;">
                    <button type="button" class="btn btn-success mx-2">Menang</button>
                    <button type="button" class="btn btn-warning mx-2">Seri</button>
                    <button type="button" class="btn btn-danger mx-2">Kalah</button>
                </div>

            <div class="card-footer" style="background-color: #E2626B; text-align: center;">
                Status Pos : <span id="statusPos"></span>
            </div>
            <!--End Footer-->
        </div>  
        </div>   
    </div>  
    <!--End Content-->
</body>
</html>