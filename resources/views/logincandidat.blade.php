<!doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 21:30:22 GMT -->
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Recrutement</title>
 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/flag.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}" /> 
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" href="{{asset('assets/css/jquery.nstSlider.min.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

    <!-- Favicon -->
    <link rel="icon" href="{{asset('images/favicon.png')}}">
    <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">


    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

  </head>

  <body>

    <header class="header-2 access-page-nav">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="header-top">
              <div class="logo-area">
                <a href="index.html"><img src="/logo-2.png" alt=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>

    <div class="padding-top-90 padding-bottom-90 access-page-bg">
      <div class="container">
        <div class="row">
          <div class="col-xl-4 col-md-6">
            <div class="access-form">
              <div class="form-header">
                <form action="{{url('/login/candidat')}}" method="POST">
                        @csrf 
                <h5><i data-feather="user"></i>Se Connecter</h5>
              </div>
              <form action="#">
                <div class="form-group">
                 <input id="email" type="email"  placeholder="e-mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                             @if ($errors->has('email'))
                                            
                                                 <span class="invalid-feedback" role="alert">
                                                     <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                             @endif
                </div>
                <div class="form-group">
                 <input id="password" type="password"  placeholder="Mot De passe" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" style="font-size: 15px;"  required>

                                            @if ($errors->has('password'))
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                </div>
                
                <div class="more-option">
                 <!--  <div class="mt-0 terms">
                    <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                    <label for="radio-4">
                     <div class="pip">
                                            <div class="col-md-6 offset-md-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                    <label class="ft" for="remember">
                                                        Mémoriser le mot de passe
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                    </label>
                  </div> -->
                   @if (Route::has('password.request'))
                   <a class="bt" href="{{ route('password.request') }}">
                     Mot de passe oublié ?
                                </a>
                            @endif
                </div>
                <button type="submit" class="button primary-bg btn-block">Se Connecter</button>
              </form>
              <div class="shortcut-login">
                <span>ou se connecter avec</span>
                <div class="buttons">
                  <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                  <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                </div>
                <p>vous n'avez pas de compte ? <a href="{{ route('candidat') }}">S'inscrire</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>