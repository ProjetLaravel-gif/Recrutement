@extends('layouts.master_recruteur')
@section('recruteur')
<div class="alice-bg padding-top-60 section-padding-bottom">
  <div class="container">
    <div class="row">
      <div class="col">
         <form action="{{ url('offres/'.$offres->id) }}" method="post">
                    {{ csrf_field() }}
        <div class="job-listing-details">
          <!-- <button onClick="imprimer('sectionAimprimer')">Imprimer</button> -->
          <div id='sectionAimprimer'>
          <div class="job-title-and-info">
            <div class="title">
                    <div class="thumb">
                      <a href="#">
                      <img src="/images/logo/{{ $offres->recruteur['logo'] }}"  style="width: 80px;  height: 80px;"class="img-fluid" alt="">
                        </a>
                      </div>
              <div class="title-body">
                <h4>{{$offres->recruteur['nom']}}</h4>
                <div class="info">
                  <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $offres->intitule }}</a></span>
                  <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $offres->ville }}</a></span>
                  <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{ $offres->duree }}</a></span>
                </div>
              </div>
            </div>
            <div class="buttons">
              <a class="save" href="#"><i data-feather="heart"></i>Save Job</a>
              <a class="apply" href="#" data-toggle="modal" data-target="#apply-popup-id">Apply Online</a>
            </div>
          </div>
          <div class="details-information section-padding-60">
            <div class="row">
              <div class="col-xl-7 col-lg-8">
                <div class="description details-section">
                  <h4><i data-feather="align-left"></i>Job Description</h4>
                  <p>{{ $offres->description }}</p>
              
                </div>
                <div class="responsibilities details-section">
                  <h4><i data-feather="zap"></i>competences</h4>
                  <ul>
                    <li>{{ $offres->competences }}</li>
                    <!-- <li>Skills on M.S Word, Excel, and Integrated Accounting package i.e. Software</li>
                    <li>Have sound knowledge of commercial activities.</li>
                    <li>Should have vast knowledge in IAS/ IFRS, Company Act, Income Tax, VAT.</li>
                    <li>Good verbal and written communication skills.</li>
                    <li>Leadership, analytical, and problem-solving abilities.</li> -->
                  </ul>
                </div>
                <div class="edication-and-experience details-section">
                  <h4><i data-feather="book"></i>Education + Experience</h4>
                  <ul>
                    <li>nombres d'annees d'experiences : {{ $offres->nbr_annee_experiences }}.</li>
                    <li>{{ $offres->dommaine }}.</li>
                    <!-- <li>M.S (Statistics) any Public University / National University.</li>
                    <li>Masters of library science any Public University.</li>
                    <li>2 to 3 year(s) Experiance</li>
                    <li>Females candidate are discourage to apply.</li> -->
                  </ul>
                </div>
                <div class="other-benifit details-section">
                  <h4><i data-feather="gift"></i>Other Benefits</h4>
                  <ul>
                    <li>Health and life insurance </li>
                    <li>2 days of weekend </li>
                    <li>2 annual performanc Bonuses</li>
                    <li>Lunch &amp; Snacks</li>
                  </ul>
                </div>
                <!-- <div class="job-apply-buttons">
                  <a href="#" class="apply"  data-toggle="modal" data-target="#apply-popup-id">Apply Online</a>
                  <a href="#" class="email"><i data-feather="mail"></i>Email Job</a>
                </div> -->
              </div>
              <div class="col-xl-4 offset-xl-1 col-lg-4">
                <div class="information-and-share">
                  <div class="job-summary">
                      @php
                                             $depot = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $offres->created_at);
                                             @endphp
                    <h4>Job Summary</h4>
                    <ul>
                      <li><span>Published on:</span> {{$depot}}</li>
                      <li><span>saliare:</span>{{ $offres->renumeration }}</li>
                      <!-- <li><span>Employment Status:</span> Full-time</li> -->
                      <li><span>Experience:</span>{{ $offres->nbr_annee_experiences }}</li>
                      <li><span>Job Location:</span>{{ $offres->ville }}</li>
                      <li><span>webadress:</span>{{ $offres->webaddresse }}</li>
                      <li><span>date de debut prevue:</span>{{ $offres->date_debut_prevu }}</li>
                    </ul>
                  </div>
                  <div class="share-job-post">
                    <span class="share"><i class="fas fa-share-alt"></i>Share:</span>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#" class="add-more"><span class="ti-plus"></span></a>
                  </div>
                  <div class="buttons">
                    <a href="#" class="button print" onClick="imprimer('sectionAimprimer')"><i data-feather="printer"></i>Print Job</a>
                    <a href="#" class="button report"><i data-feather="flag"></i>Report Job</a>
                  </div>
                  <div class="job-location">
                    <h4>Job Location</h4>
                    <div id="map-area">
                     <br>
<style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
 
<div id="map"></div>
    <script>
// Initialize and add the map
function initMap() {
  // The location of Uluru
  var uluru = {lat:35.7300362 , lng: -0.5852167};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 10, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}

    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script 
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyARNL0H7Pvr1Rfo16dBoM55iuPOdjomTvs&sensor=false&callback=initMap">
    </script>
 <!-- <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div> -->
                    </div>
                  </div>
                </div> 
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-7 col-lg-8">
              <div class="company-information details-section">
                <h4><i data-feather="briefcase"></i>About the Company</h4>
                <ul>
                  <li><span>Company Name:</span>{{Auth::guard('recruteur')->user()->nom}}</li>
                  <li><span>Address:</span>{{Auth::guard('recruteur')->user()->adresse}}</li>
                  <li><span>Website:</span> <a href="#">{{Auth::guard('recruteur')->user()->siteweb}}</a></li>
                  <li><span>Company Profile:</span></li>
                  <li>It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum looked up one of the more obscure Latin words, consectetur.</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
  @endsection 
