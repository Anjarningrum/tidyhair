<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Portal</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">


    <style>
        *{
            list-style: none;
            font-family: 'Nunito';
        }
        a{
            text-decoration: none;
        }
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="{{ asset('bootstrap') }}/dashboard.css" rel="stylesheet">
  </head>
  <body>
    

<div class="container-fluid">
  <div class="row p-1">
    <nav id="sidebarMenu" style="background: #154F80 !important;" class="col-md-3 col-lg-3 d-md-block pt-0 bg-light sidebar collapse border m-1 me-2">
      <div class="position-sticky">
            <div>
                <img src="{{asset('images/adminpusat/header.png')}}" class="img-fluid">
            </div>
        <div class="row mb-4">
            <div>
                <img src="{{asset('images/adminbranch/WelcomAdminBranch.png')}}" class="img-fluid" style="margin: 5px 0px 5px 0px;">
            </div>
        </div>
        <ul class="nav flex-column ps-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="{{ route('adminbranch.index') }}">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
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
            <a class="nav-link" href="{{ route('adminbranch.profile') }}">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
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
                        <span>
                            <img src="{{asset('images/adminpusat/IconDataMaster.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Data Master
                    </div>
                </div>
            </a>
            <div class="collapse" id="master-collapse" style="">
            <ul class="btn-toggle-nav ms-4">
                <li class="mb-2 mt-2"><a class="link-light" href="{{ route('adminbranch.barber') }}">Barber</a></li>
                <li class="mb-2"><a class="link-light" href="{{ route('adminbranch.customer') }}">Customer</a></li>
            </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link  rounded collapsed" data-bs-toggle="collapse" data-bs-target="#product-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
                            <img src="{{asset('images/adminpusat/IconProduct.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Produk
                    </div>
                </div>
            </a>
            <div class="collapse" id="product-collapse" style="">
                <ul class="btn-toggle-nav ms-4">
                    <li class="mb-2 mt-2"><a class="text-light" href="{{ route('adminbranch.barang') }}">Barang</a></li>
                    <li class="mb-2"><a class="text-light" href="{{ route('adminbranch.jasa') }}">Jasa</a></li>
                </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#order-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
                            <img src="{{asset('images/adminpusat/IconProduct.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Pesanan
                    </div>
                </div>
            </a>
                <div class="collapse" id="order-collapse" style="">
                    <ul class="btn-toggle-nav ms-4">
                        <li class="mb-2 mt-2"><a class="text-light" href="{{ route('adminbranch.orderbarang') }}">Barang</a></li>
                        <li class="mb-2"><a class="text-light" href="{{ route('adminbranch.orderjasa') }}">Jasa</a></li>
                    </ul>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#transaksi-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
                            <img src="{{asset('images/adminpusat/IconTransaction.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Transaksi
                    </div>
                </div>
            </a>
                <div class="collapse" id="transaksi-collapse" style="">
                    <ul class="btn-toggle-nav ms-4">
                        <li class="mb-2 mt-2"><a class="text-light" href="{{ route('adminbranch.transaksibarang') }}">Transaksi Barang</a></li>
                        <li class="mb-2"><a class="text-light" href="{{ route('adminbranch.transaksijasa') }}">Transaksi Jasa</a></li>
                        <li class="mb-2"><a class="text-light" href="{{ route('adminbranch.pembayaranbarang') }}">Pembayaran Barang</a></li>
                        <li class="mb-2"><a class="text-light" href="{{ route('adminbranch.pembayaranjasa') }}">Pembayaran Jasa</a></li>
                    </ul>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#keuangan-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
                            <img src="{{asset('images/adminpusat/IconFinance.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Keuangan
                    </div>
                </div>
            </a>
                <div class="collapse" id="keuangan-collapse" style="">
                    <ul class="btn-toggle-nav ms-4">
                        <li class="mb-2 mt-2"><a class="text-light" href="">Keuangan Branch</a></li>
                        <li class="mb-2"><a class="text-light" href="">Keuangan Barber</a></li>
                    </ul>
                </div>
          </li>
          <li class="nav-item">
            <a class="nav-link rounded collapsed" data-bs-toggle="collapse" data-bs-target="#ulasan-collapse" aria-expanded="false" href="">
                <div class="row">
                    <div class="col-md-2 col-lg-2">
                        <span>
                            <img src="{{asset('images/adminpusat/IconFeedback.png')}}">
                        </span>
                    </div>
                    <div class="col-md col-lg mt-1 text-white">
                        Ulasan
                    </div>
                </div>
            </a>
                <div class="collapse" id="ulasan-collapse" style="">
                    <ul class="btn-toggle-nav ms-4">
                        <li class="mb-2 mt-2"><a class="text-light" href="">Ulasan Branch</a></li>
                        <li class="mb-2"><a class="text-light" href="">Ulasan Barber</a></li>
                    </ul>
                </div>
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
                    <div class="col-md col-lg mt-1 text-white">
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
    </nav>
    @yield('content')
  </div>
</div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script>
      <script src="{{ asset('bootstrap') }}/dashboard.js"></script>
  </body>
</html>