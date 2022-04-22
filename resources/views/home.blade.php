@extends('template')

@section('content')
    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-6">
                <div class="text-center mb-3">
                    <span style="font-size:25px;">Selamat Datang di Portal Berita </span> <img src="https://www.harianjogja.com/assets/v1/images/logo-harjo.png" style="width:150px;">
                </div>

                <div class="mb-5" style="color:#666;">Harianjogja.com merupakan bagian dari Harian Umum Harian Jogja. Harianjogja.com tak hanya menghadirkan kabar seputar Jogja namun informasi nasional dan global.</div>

                <div class="text-center">
                    <a href="https://www.harianjogja.com" style="border:1px solid #1e1c53 !important; color:#000;" class="btn btn-outline-primary">Kunjungi hariajogja.com</a>
                    <a href="{{ url('/register') }}?action=daftar" style="background:#1e1c53 !important; color:#ffcf0e" class="btn btn-primary">Daftar Sebagai User</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="{{ asset('img/working.svg') }}" alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src="{{ asset('img/team.svg') }}" alt="First slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="container mb-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="title text-center mb-3">
                    <i class="fa-solid fa-server" style="font-size:50px; color:#1e1c53;"></i>
                </div>
                <div class="content-div text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ipsum risus, mollis ac tempus vel, sollicitudin id purus. 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="title text-center mb-3">
                    <i class="fa-regular fa-window-restore" style="font-size:50px; color:#1e1c53;"></i>
                </div>
                <div class="content-div text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ipsum risus, mollis ac tempus vel, sollicitudin id purus. 
                </div>
            </div>
            <div class="col-lg-4">
                <div class="title text-center mb-3">
                    <i class="fa fa-globe" style="font-size:50px; color:#1e1c53;"></i>
                </div>
                <div class="content-div text-center">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ipsum risus, mollis ac tempus vel, sollicitudin id purus. 
                </div>
            </div>
        </div>
    </div>
@endsection

@section('javascript')
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel').carousel({
                interval: 2000
            })
        });
    </script>
@endsection