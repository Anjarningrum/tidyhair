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
    </style>
</head>
<body class="container-fluid mx-0 px-0">
    <div class="vh-100">
    <div class="container-fluid py-1" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <div class="col-md-3 py-0 px-0 mx-1 border" style="background-color: #0B3F68;">
                <div>
                    <img src="{{asset('images/adminpusat/header.png')}}" class="img-fluid" >
                </div>
                    <img src="{{asset('images/adminpusat/WelcomAdminPusat.png')}}" class="img-fluid" style="margin: 5px 0px 5px 0px;">
                    <div class="container" style="margin: 15px 0px 5px 0px;padding: 0px;">
                        <nav class="position-sticky">
                            <ul style="padding: 0px 0px 0px 11px;">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{ route('adminpusat.index') }}" style="font-family: nunito;color: #FFFFFF;">
                                    <div class="row h-100">
                                        <div class="col-2">
                                            <img src="{{asset('images/adminpusat/IconDashboard.png')}}" class="icn">
                                        </div>
                                        <div class="col-10 px-0">
                                            Dashboard    
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('adminpusat.profile') }}" style="font-family: nunito;color: #FFFFFF;">
                                    <div class="row">
                                        <div class="col-2">
                                            <img src="{{asset('images/adminpusat/IconProfile.png')}}" class="icn" style="margin-right: 15px">
                                        </div>
                                        <div class="col-10 px-0">
                                            Profile    
                                        </div>
                                    </div>
                                    </a>
                                </li>


                                <li class="mb-1">
                                    <a class="btn rounded collapsed" data-bs-toggle="collapse" data-bs-target="#master-collapse" aria-expanded="false" style="font-family: nunito;color: #FFFFFF;">
                                        <img src="{{asset('images/adminpusat/IconDataMaster.png')}}" class="icn" style="margin-right: 23px">
                                        Data Master   
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
                                <li class="mb-1">
                                    <a class="btn rounded collapsed" data-bs-toggle="collapse" data-bs-target="#product-collapse" aria-expanded="false" style="font-family: nunito;color: #FFFFFF;">
                                        <img src="{{asset('images/adminpusat/IconProduct.png')}}" class="icn" style="margin-right: 21px">
                                        Product 
                                    </a>
                                    <div class="collapse" id="product-collapse" style="">
                                        <ul class="btn-toggle-nav">
                                            <li><a class="text-light" href="{{ route('adminpusat.barang') }}">Barang</a></li>
                                            <li><a class="text-light" href="{{ route('adminpusat.jasa') }}">Jasa</a></li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="{{ route('adminpusat.artikel') }}" style="font-family: nunito;color: #FFFFFF;">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('images/adminpusat/IconArtikel.png')}}" class="icn">
                                            </div>
                                            <div class="col-10 px-0">
                                                Article   
                                            </div>
                                        </div>
                                    </a>
                                </li>

                                <li class="mb-1">
                                    <a class="btn rounded collapsed" data-bs-toggle="collapse" data-bs-target="#order-collapse" aria-expanded="false" style="font-family: nunito;color: #FFFFFF;">
                                        <img src="{{asset('images/adminpusat/IconProduct.png')}}" class="icn" style="margin-right: 21px">
                                        Order 
                                    </a>
                                    <div class="collapse" id="order-collapse" style="">
                                        <ul class="btn-toggle-nav">
                                            <li><a class="text-light" href="{{ route('adminpusat.orderbarang') }}">Barang</a></li>
                                            <li><a class="text-light" href="{{ route('adminpusat.jasa') }}">Jasa</a></li>
                                        </ul>
                                    </div>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('images/adminpusat/IconOrder.png')}}" class="icn">
                                            </div>
                                            <div class="col-10 px-0">
                                                Order   
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('images/adminpusat/IconTransaction.png')}}" class="icn">
                                            </div>
                                            <div class="col-10 px-0">
                                                Transaction   
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('images/adminpusat/IconFinance.png')}}" class="icn">
                                            </div>
                                            <div class="col-10 px-0">
                                                Finance   
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                        <div class="row">
                                            <div class="col-2">
                                                <img src="{{asset('images/adminpusat/IconFeedback.png')}}" class="icn">
                                            </div>
                                            <div class="col-10 px-0">
                                                Feedback   
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </nav>            
                    </div> 
                    <div class="float-none" style="background-color: #154F80;margin-top:47%;">
                        <a aria-current="page" href="{{ route('logout') }}" style="font-family: nunito;color: white;text-decoration:none;"
                            onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>             
            </div>
            <div class="col-md py-0 px-0 mx-1 border">
              @yield('content')
            </div>
        </div>
    </div>
    </div>
    
</body>
</html>

