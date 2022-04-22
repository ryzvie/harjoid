<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/02ac7d2e39.js" crossorigin="anonymous"></script>

    <title>HarianJogja.id</title>

    <style>
        body{
            font-family:Poppins;
            background:#f9f9f9;
        }
        .btn-daftar{
            background:#1e1c53;
            color:#ffcf0e;
            padding:5px 10px;
            width:100px;
            font-weight:bold;


        }
    </style>
  </head>
  <body>

    <!-- HEADER SECTION -->
    <div id="nav" class="desktop bg-white border-bottom box-shadow mb-5">

        <div style="margin-bottom:0px !important;" class="container d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 ">

            

            <h5 class="my-0 mr-md-auto font-weight-normal">

                <img src="https://www.harianjogja.com/assets/v1/images/logo-harjo.png" style="width:150px;">

            </h5>


            <a type="button" class="mb-2 btn btn-daftar" href="{{ url('register?action=daftar') }}">Daftar</a>
        </div>

    </div>
      
    @yield('content')
    
    <div class="footer">
        <div class="text-center" style="font-size:14px; background:#fff;padding:10px;border-top:1px solid #ccc; box-shadow:5px 5px 5px #ccc;">
            Cover template for Bootstrap, by @Ryzvie.
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

    @yield('plugin')

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
    -->

    @yield('javascript')
  </body>
</html>
