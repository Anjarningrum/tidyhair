<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    
    <title>Dashboard</title>
    <script>
        
    </script>
    <style>
        *{
            list-style: none;
        }
        body {
            padding: 0px 0px 0px 0px;
        }
        #header img{
            height: 50%;
            width: auto;
        }
        .border{
            border: 0.2px #0C4A7D solid !important;
        }
        .icn{
            height: 15px;
            margin: 0px 7px 5px 0px;
        }
        .menu-name{
            padding-top: 5px;
        }
    </style>
    <style>
        body {
        min-height: 100vh;
        min-height: -webkit-fill-available;
        }

        html {
        height: -webkit-fill-available;
        }

        main {
        display: flex;
        flex-wrap: nowrap;
        height: 100vh;
        height: -webkit-fill-available;
        max-height: 100vh;
        overflow-x: auto;
        overflow-y: hidden;
        }


        .bi {
        vertical-align: -.125em;
        pointer-events: none;
        fill: currentColor;
        }

        .dropdown-toggle { outline: 0; }

        .nav-flush .nav-link {
        border-radius: 0;
        }

        .btn-toggle {
        display: inline-flex;
        align-items: center;
        padding: .25rem .5rem;
        font-weight: 600;
        color: rgba(0, 0, 0, .65);
        background-color: transparent;
        border: 0;
        }
        .btn-toggle:hover,
        .btn-toggle:focus {
        color: rgba(0, 0, 0, .85);
        background-color: #d2f4ea;
        }

        .btn-toggle::before {
        width: 1.25em;
        line-height: 0;
        content: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' width='16' height='16' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='rgba%280,0,0,.5%29' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M5 14l6-6-6-6'/%3e%3c/svg%3e");
        transition: transform .35s ease;
        transform-origin: .5em 50%;
        }

        .btn-toggle[aria-expanded="true"] {
        color: rgba(0, 0, 0, .85);
        }
        .btn-toggle[aria-expanded="true"]::before {
        transform: rotate(90deg);
        }

        .btn-toggle-nav a {
        display: inline-flex;
        padding: .1875rem .5rem;
        margin-top: .125rem;
        margin-left: 1.25rem;
        text-decoration: none;
        }
        .btn-toggle-nav a:hover,
        .btn-toggle-nav a:focus {
        background-color: #d2f4ea;
        }

        .scrollarea {
        overflow-y: auto;
        }

        .fw-semibold { font-weight: 600; }
        .lh-tight { line-height: 1.25; }
        #sidebarMenu{
            background: #0B3F68;
        }
    </style>
</head>
<body>    
<div class="container-fluid">
  <div class="row px-1">
    <nav id="sidebarMenu" style="background: #154F80 !important;" class="col-md col-lg d-md-block bg-light sidebar collapse border me-1 p-0">
    <div class="position-sticky">
    <div class="row">
        <div>
            <img src="{{asset('images/adminpusat/header.png')}}" class="img-fluid" >
        </div>
    </div>
    <div>
        <div class="position-sticky pt-3">
        <div class="row mb-4">
            <div>
                <img src="{{asset('images/adminpusat/WelcomAdminPusat.png')}}" class="img-fluid" style="margin: 5px 0px 5px 0px;">
            </div>
        </div>
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('adminpusat.index') }}">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconDashboard.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Beranda
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('adminpusat.profile') }}">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconProfile.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Profil
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconDataMaster.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Data Master
                    </div>
                </div>
            </a>
            <div class="collapse" id="master-collapse" style="">
            <ul class="btn-toggle-nav">
                <li><a class="text-light" href="{{ route('adminpusat.branch') }}">Branch</a></li>
                <li><a class="link-light" href="{{ route('adminpusat.barber') }}">Barber</a></li>
                <li><a class="link-light" href="{{ route('adminpusat.customer') }}">Customer</a></li>
                <li><a class="link-light" href="{{ route('adminpusat.hairstyle') }}">Hair Style</a></li>
                <li><a class="link-light" href="#">Payment</a></li>
            </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link  rounded collapsed" data-bs-toggle="collapse" data-bs-target="#product-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconProduct.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Produk
                    </div>
                </div>
            </a>
            <div class="collapse" id="product-collapse" style="">
                <ul class="btn-toggle-nav">
                    <li><a class="text-light" href="{{ route('adminpusat.barang') }}">Barang</a></li>
                    <li><a class="text-light" href="{{ route('adminpusat.jasa') }}">Jasa</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('adminpusat.artikel') }}">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconArtikel.png')}}" width="21px">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Artikel
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#order-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconProduct.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Pesanan
                    </div>
                </div>
            </a>
                <div class="collapse" id="order-collapse" style="">
                    <ul class="btn-toggle-nav">
                        <li><a class="text-light" href="{{ route('adminpusat.orderbarang') }}">Barang</a></li>
                        <li><a class="text-light" href="{{ route('adminpusat.jasa') }}">Jasa</a></li>
                    </ul>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconTransaction.png')}}" width="21px">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Transaksi
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconFinance.png')}}" width="21px">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Keuangan
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                            <img src="{{asset('images/adminpusat/IconFeedback.png')}}" width="21px">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Ulasan
                    </div>
                </div>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span class="icn">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-light">
                        {{ __('Logout') }}
                    </div>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                    </form>
                </div>
            </a>
          </li>
        </ul>
        </div>
    </div>
    </div>
    </nav>
    @yield('content')
</div>
</body>
</html>