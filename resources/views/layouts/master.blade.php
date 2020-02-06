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

    @yield('content')


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


        <script>
function imprimer(divName) {
      var printContents = document.getElementById(divName).innerHTML;    
   var originalContents = document.body.innerHTML;      
   document.body.innerHTML = printContents;     
   window.print();     
   document.body.innerHTML = originalContents;
   }
</script>

<script type="text/javascript">
PDF.SetShowToolBar("true"); //--- barre d'outils true(visible) false(non visible) ---//
PDF.SetShowScrollbar("true"); //--- barre de scroll true(visible) false(non visible) ---//
PDF.SetPageMode("none"); //--- cache les signets ---//
PDF.setZoom(80%); //--- Zoom le document à 80% ---//
</script>
 </body><

<!-- Mirrored from themerail.com/html/oficiona/job-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 20191:29:44 GMT -->
</html>
