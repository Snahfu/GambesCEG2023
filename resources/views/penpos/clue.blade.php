<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clue</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>

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
  </head>
<body>
    
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
        <select class="form-select">
          <option selected>-- Pilih Tim --</option>
          <option value="1">Tim 1</option>
          <option value="2">Tim 2</option>
          <option value="3">Tim 3</option>
        </select>
          <!-- End Pilih Tim -->
        <br>
        
        <!-- Pilih Clue -->
        <h2><b>Pilih Clue</b></h2>
        <select name="clue-part1">
          <option value="">-- Pilih Kartu 1 --</option>
          <option value="1">Item 1</option>
          <option value="2">Item 2</option>
          <option value="3">Item 3</option>
        </select> +
        <select name="clue-part2">
          <option value="">-- Pilih Kartu 2 --</option>
          <option value="1">Item 1</option>
          <option value="2">Item 2</option>
          <option value="3">Item 3</option>
        </select> +
        <select name="clue-part3">
          <option value="">-- Pilih Kartu 3 --</option>
          <option value="1">Item 1</option>
          <option value="2">Item 2</option>
          <option value="3">Item 3</option>
        </select> 
         <!-- End Pilih Clue -->
         <br>
         <br>
         <h5>Clue: Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro quidem ratione, vitae accusantium dolores, expedita dolorem excepturi tempora unde officiis quis. Est sapiente ullam neque similique quibusdam facilis rem nobis?</h5>
      </div>
      
    </div>
    <!-- End Card Container -->

</body>
</html>