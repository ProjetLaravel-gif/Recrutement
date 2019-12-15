 <!DOCTYPE html>

 <html lang="en">
   
 <!-- Mirrored from themerail.com/html/oficiona/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 21:30:22 GMT -->
 <head>

     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Oficiona</title>
  
     <!-- Bootstrap CSS -->
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">

     <!-- External Css -->
     <link rel="stylesheet" href="{{asset('assets/css/fontawesome-all.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/themify-icons.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/et-line.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/bootstrap-select.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/plyr.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/flag.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/slick.css')}}"> 
     <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.min.css')}}">
     <link rel="stylesheet" href="{{asset('assets/css/jquery.nstSlider.min.css')}}">

     <!-- Custom Css -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">

     <!-- Fonts -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

     <!-- Favicon -->
     <link rel="icon" href="{{asset('images/favicon.png')}}">
     <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.PNG')}}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.PNG')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.PNG')}}"> 
  
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
                 <a href="index.html"><img src="logo-2.png" alt=""></a>
               </div>
               <div class="top-nav">
                 <a href="login.html" class="account-page-link">Se Connecter</a>
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
                 <h5><i data-feather="edit"></i>formulaire recruteur</h5>
               </div>
               <form action="{{url('/register/recruteur')}}" method="POST">
                @csrf
               <!-- <div class="account-type"> -->
                
                 <!-- <label for="idRegisterEmp">
                   <input id="idRegisterCan" type="radio" name="register">
                   <span>Candidate</span>
                 </label> -->
                 <!-- <label for="idRegisterCan">
                   <input id="idRegisterEmp" type="radio" name="register">
                   <span>Employer</span>
                 </label> -->
               <!-- </div> -->
        
                <div class="form-group">
                  <input type="text" placeholder="Nom"  class="form-control{{ $errors->has('nom') ? ' is-invalid' : '' }}" name="nom" value="{{ old('nom') }}" required autofocus>

                                @if ($errors->has('nom'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('nom') }}</strong>
                                    </span>
                                @endif
                </div>

                  <div>
                             <div class="form-group">
                               <select name="type" class="form-control">
                                 <option>TYPE</option>
                                 <option>public</option>
                                 <option>privé</option>
                                  </select>
                               
                             </div>
                           </div>

                  <div class="form-group">
                <input type="text" placeholder="numero telephone"class="form-control{{ $errors->has('numtel') ? ' is-invalid' : '' }}" name="numtel" value="{{ old('numtel') }}" required autofocus>

                                @if ($errors->has('numtel'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('numtel') }}</strong>
                                    </span>
                                @endif
                </div>
                  <div class="form-group">
                <input type="text" placeholder="adresse"class="form-control{{ $errors->has('adresse') ? ' is-invalid' : '' }}" name="adresse" value="{{ old('adresse') }}" required autofocus>

                                @if ($errors->has('adresse'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('adresse') }}</strong>
                                    </span>
                                @endif
                </div>
                  
                  <!-- <div class="form-group">
                   <input type="text" placeholder="LOGO" name="logo" class="form-control"> -->
                  <!--  <small id="fileHelp" class="form-text text-muted">Please upload a valid image file. Size of image should not be more than 2MB.</small>
                 </div> -->
               
                
                      <div class="form-group">
                <input type="text" placeholder="siteweb"class="form-control{{ $errors->has('siteweb') ? ' is-invalid' : '' }}" name="siteweb" value="{{ old('siteweb') }}" required autofocus>

                                @if ($errors->has('siteweb'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('siteweb') }}</strong>
                                    </span>
                                @endif
                </div>
                  

                <div class="form-group">
                         <input id="email" type="email" placeholder="Addresse E-Mail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                      
                 <div class="form-group">
                                  <input id="password"   placeholder="Mot De Passe" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                   <div class="form-group">
                                <input id="password-confirm" placeholder="Confirmer Mot De Passe" type="password" class="form-control" name="password_confirmation"  onblur="verif(this)" required>
                            </div>
                            
                 <div class="more-option terms">
                   <div class="mt-0 terms">
                     <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition" checked>
                     <label for="radio-4">
                       <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                     </label>
                   </div>
                 </div>
                 <button class="button primary-bg btn-block">Register</button>
               </form>
               <div class="shortcut-login">
                 <span>Or connect with</span>
                 <div class="buttons">
                   <a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Facebook</a>
                   <a href="#" class="google"><i class="fab fa-google"></i>Google</a>
                 </div>
                 <p>Already have an account? <a href="login.html">Login</a></p>
               </div>
             </div>
           </div>
         </div>
       </div>
     </div>
  
     
     <!-- Optional JavaScript -->
     <!-- jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/feather.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery.nstSlider.min.js')}}"></script>
     <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('assets/js/visible.js')}}"></script>
     <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
     <script src="{{asset('assets/js/chart.js')}}"></script>
     <script src="{{asset('assets/js/plyr.js')}}"></script>
     <script src="{{asset('assets/js/tinymce.min.js')}}"></script>
     <script src="{{asset('assets/js/slick.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>

     <script src="{{asset('assets/js/custom.js')}}"></script>

     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>
     <script src="{{asset('assets/js/map.js')}}"></script>

   </body>

 <!-- Mirrored from themerail.com/html/oficiona/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 21:30:23 GMT -->
 </html>
