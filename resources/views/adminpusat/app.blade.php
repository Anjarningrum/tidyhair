<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>
    
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"/>
    
    <title>Dashboard</title>
    <style>
        *{
            list-style: none;
        }
        body {
            padding: 0px 1px 0px 1px;
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
</head>
<body class="container-fluid mx-0 px-1">
    <div class="vh-100">
    <div class="container-fluid py-1" style="height: 100%;">
        <div class="row" style="height: 100%;">
            <div class="col-xs-12 col-md-3 py-0 px-0 border" style="background-color: #9C9C9C;">
                <div>
                    <img src="{{asset('images/adminpusat/header.png')}}" class="img-fluid" >
                </div>
                <div>
                    <img src="{{asset('images/adminpusat/WelcomAdminPusat.png')}}" class="img-fluid" style="margin: 5px 0px 5px 0px;">
                    <div class="container" style="height: 100%;margin: 15px 0px 5px 0px;padding: 0px;">
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
                                            <img src="{{asset('images/adminpusat/IconProfile.png')}}" class="icn">
                                        </div>
                                        <div class="col-10 px-0">
                                            Profile    
                                        </div>
                                    </div>
                                    </a>
                                </li>
                                <li class="nav-item dropdown">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                                <img src="{{asset('images/adminpusat/IconDataMaster.png')}}" class="icn">
                                                Data Master   
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="{{ route('adminpusat.branch') }}">Branch</a></li>
                                                <li><a class="dropdown-item" href="{{ route('adminpusat.barber') }}">Barber</a></li>
                                                <li><a class="dropdown-item" href="{{ route('adminpusat.customer') }}">Customer</a></li>
                                                <li><a class="dropdown-item" href="#">Hair Style</a></li>
                                                <li><a class="dropdown-item" href="#">Payment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item dropdown">
                                    <div class="row">
                                        <div class="col-12">
                                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-current="page" href="#" style="font-family: nunito;color: #FFFFFF;">
                                                <img src="{{asset('images/adminpusat/IconProduct.png')}}" class="icn">
                                                Product 
                                            </a>
                                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <li><a class="dropdown-item" href="#">Barang</a></li>
                                                <li><a class="dropdown-item" href="#">Jasa</a></li>
                                            </ul>
                                        </div>
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
                                <li class="nav-item my-5">
                                    <a class="nav-link" aria-current="page" href="{{ route('logout') }}" style="font-family: nunito;color: black;"
                                        onclick="event.preventDefault();
                                                        document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-9 border" style="background-color: #FFFFFF;">
              @yield('content')
            </div>
            
        </div>
    </div>
    </div>
</body>
</html>

