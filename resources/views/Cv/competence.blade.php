 <!Doctype html>
<html lang="en">
  
<!-- Mirrored from themerail.com/html/oficiona/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 21:29:48 GMT -->
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Recrutement</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

    <!-- External Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/et-line.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plyr.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" /> 
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.nstSlider.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/html5-simple-date-input-polyfill.css')}}" />

    <!-- Custom Css -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard.css')}}">

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

 @include('layouts/_menu')
<br>
<br>
<br>
<br>
<br>

<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1>Ajouter cv</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Acceuil</a></li>
              <li class="breadcrumb-item active" aria-current="page">Ajouter cv</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-md-6">
        <div class="breadcrumb-form">
         <!--  <form action="{{ url('cvs') }}" method="post">
            @csrf  -->
            <input type="text" placeholder="Enter Keywords">
            <button><i data-feather="search"></i></button>
          <!-- </form> -->
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->

<div class="alice-bg section-padding-bottom">
  <div class="container no-gliters">
    <div class="row no-gliters">
      <div class="col">
        <div class="post-container">
          <div class="post-content-wrapper" id="app">
            <!-- <form action="#" class="job-post-form"> -->
              <div class="basic-info-input">

<!-- <h2>@{{message}}</h2> -->
<form action="{{ url('competences') }}"  method="post">
  {{ csrf_field() }}
<h4><i data-feather="plus-circle"></i>Competence</h4>
  
 <input type="hidden" name="cv_iid" value="{{$cv_iid}}">
 <!-- <div v-for="formation in formations"> -->



<div class="row">
  <label class="col-md-3 col-form-label">Description</label>
  <div class="col-md-9">
    <div class="form-group">
       <textarea name="description" placeholder="Description text here"></textarea>
    </div>

  </div>
  

    <a href="#" class="add-new-field">+ Ajouter Competence</a>
  </div>
<!-- </div> -->


<div class="form-group row">
                  <label class="col-md-3 col-form-label"></label>
                  <div class="col-md-9">
                    
                    <button class="button">Suivant</button>
                  </div>
                </div>
                          @yield('javascripts')

                              </div>
                            </form>
                          </div>
                          <div class="post-sidebar">
                            <h5><i data-feather="arrow-down-circle"></i>Navigation</h5>
                            <ul class="sidebar-menu">
                              <li><a href="#full-name">Full Name</a></li>
                              <li><a href="#information">Informations</a></li>
                              <li><a href="#about">About You</a></li>
                              <li><a href="#education">Education</a></li>
                              <li><a href="#experience">Work Experiance</a></li>
                              <li><a href="#skill">Professional Skill</a></li>
                              <li><a href="#qualification">Special Qualification</a></li>
                              <li><a href="#portfolio">Portfolio</a></li>
                              <li><a href="#cv">Upload CV</a></li>
                              <li><a href="#cover">Cover Letter</a></li>
                              <li><a href="#profile">Social Profile</a></li>
                              <li><a href="#details">Personal Details</a></li>
                            </ul>
                            <div class="signin-option">
                              <p>Have an Account ? Before submit job you need to sign in !</p>
                              <div class="buttons">
                                <a href="#" class="signin">Sign in</a>
                                <a href="#" class="register">Register</a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
@section('javascripts')

<script src="{{asset('assets/js/vue.js')}}" ></script>
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script >
  
  var app = new Vue({
     el: '#app',
     data: {
      message: 'je suis yasmine fandi',
      formations : []
     },

     methods: {

      getFormations: function(){
         axios.get('http://localhost:8000/getFormations')
         .then(response => {
          this.formations = response.data;
         })
         .catch(error => {
          console.log('errors :', error)
         })
      }
     },
     
     mounted:function() {
       this.getFormations();
     }
  });

</script>


@endsection

 @include('layouts/_footer')


 

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
    <script src="{{asset('assets/js/dashboard.js')}}"></script>
    <script src="{{asset('assets/js/datePicker.js')}}"></script>
    <script src="{{asset('assets/js/upload-input.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>   
     <script src="{{asset('assets/js/map.js')}}"></script> 
 </body><

<!-- Mirrored from themerail.com/html/oficiona/job-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 20191:29:44 GMT -->
</html>
