<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <title>{{ config('app.name', 'Laravel') }}</title>
    <style>
        body {
            /*background: url("{{asset('images/background.png')}}") no-repeat center center fixed;
            */
            background-color:white;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            background-size: cover;
            -o-background-size: cover;
        }

        .form-login{
            text-align: center;
            padding: 10% 0 15% 0;
        }
        #email{
            background-image:url("{{ asset('images/username.png') }}"); 
            background-repeat: no-repeat; 
            background-position: 3%;
            background-size: 5%;
        }
        .mail-field{
            border: 0.5px black solid;
            background: transparent;
            margin: 21px 5px 5px 5px;
            padding: 5px 5px 5px 30px;
            font-size: 10px;
            width: 86%;
        }
        #password{
            background-image:url("{{ asset('images/pass-icon.png') }}"); 
            background-repeat: no-repeat; 
            background-position: 3%;
            background-size: 5%;
        }
        .pass-field{
            border: 0.5px black solid;
            background: transparent;
            margin: 5px 5px 21px 5px;
            padding: 5px 5px 5px 30px;
            font-size: 10px;
            width: 86%;
        }
        .login-wrapper{
            width: 86%;
            margin: 0 7% 0 7%;
            text-align: right;
        }
        .login{
            display: inline;
            width: 100%;
            background: #0B3F68;
            padding: 7px;
            border: 0px;
            font-size: 10px;
            color: white;
        }
        .login:hover{
            background: #e2e2e2;
        }
        .forgot-link{
            
        }
        .forgot-link a{
            text-decoration: none;
            color: black;
            font-size: 9px;
        }
    </style>
</head>
<body>
    <div class="container-fluid my-5">
        <div class="row justify-content-start">
            <div class="col-xs-4 col-md-4"></div>
            <div class="col-xs-4 col-md-4 my-4">
                <div class="row mx-2">
                    <img src="{{asset('images/banner-login.png')}}" class="image-fluid p-0">
                </div>
                <div class="row mx-2" style="background-color: #EDECEC;opacity: 0.9;">
                    <div class="form-login">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf
                            <div>
                                <input id="email" type="email" class="mail-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div>     
                                <input id="password" type="password" class="pass-field @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Kata Sandi">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        <div class="login-wrapper">
                            <button type="submit" class="login">
                                {{ __('Masuk') }}
                            </button>
                            <div class="forgot-link">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">
                                        {{ __('Lupa Kata Sandi?') }}
                                    </a>
                                @endif
                            </div>
                        </div>        
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-4"></div>
        </div>
    </div>
</body>
</html>
