@extends('layouts.master')
@section('content')

<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1>Employer Listing</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Employer Listing</li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="col-md-6">
        <div class="breadcrumb-form">
          <form action="#">
            <input type="text" placeholder="Enter Keywords">
            <button><i data-feather="search"></i></button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Breadcrumb End -->

<!-- Job Listing -->
<div class="alice-bg section-padding-bottom">
  <div class="container">
    <div class="row no-gutters">
      <div class="col">
        <div class="employer-container">
          <div class="filtered-employer-wrapper">
            <div class="employer-view-controller-wrapper">
              <div class="employer-view-controller">
                <div class="controller list active">
                  <i data-feather="menu"></i>
                </div>
                <div class="controller grid">
                  <i data-feather="grid"></i>
                </div>
                <div class="employer-view-filter">
                  <select class="selectpicker">
                    <option value="" selected>Most Recent</option>
                    <option value="california">Top Rated</option>
                    <option value="las-vegas">Most Popular</option>
                  </select>
                </div>
              </div>
              <div class="showing-number">
                <span>Showing 1–12 of 28 Jobs</span>
              </div>
            </div>
            <div class="employer-filter-result">
               @foreach($jobs as $job)
                  <form action="{{ url('list') }}" method="post">
                          {{ csrf_field() }}
              <div class="employer">
                <div class="thumb">
                  <a href="#">
                    <img src="images/employer/thumb-1.png" class="img-fluid" alt="">
                  </a>
                </div>
                <div class="body">
                  <div class="content">
                    <h4><a href="employer-details.html">{{ $job->nom }}</a></h4>
                    <div class="info">
                     <span class="company"><a href="#">{{ $job->type }}</a></span>
                      <span class="company"><a href="#">{{ $job->adresse }}</a></span>
                    </div>
                  </div>
                  <div class="button-area">
                    <a href="{{ route('stp')}}" class="button" data-toggle="modal" data-target="#apply-popup-id">postuler</a>
                    <a href="{{ url('contact/createC/'.$job->id) }}" class="inbox"><i data-feather="mail"></i></a>
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
</div>
</div>

      <div class="apply-popup">
                                         <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                               <div class="modal-header">
                                                 <h5 class="modal-title"><i data-feather="edit"></i>APPLY FOR THIS JOB</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                 </button>
                                               </div>
                                               <div class="modal-body">
                                                 <form action="{{route ('stp')}}" enctype="multipart/form-data" method="POST">

                                                     {{ csrf_field() }}

                                                  <input type="hidden" name="recruteur_id" value="{{$job->id}}">
                                                   <div class="form-group">
                                                     <textarea class="form-control" placeholder="Message" name="message"></textarea>
                                                   </div>
                                                   <div class="form-group file-input-wrap" name="cv">
                                                     <label for="up-cv" name="cv">
                                                       <input id="up-cv" type="file" name="cv">
                                                       <i data-feather="upload-cloud"></i>
                                                       <span>Upload your resume <span>(pdf,zip,doc,docx)</span></span>
                                                     </label>
                                                   </div>
                                                   <div class="more-option">
                                                     <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                                                     <label for="radio-4">
                                                       <span class="dot"></span> I accept the <a href="#">terms & conditions</a>
                                                     </label>
                                                   </div>
                                                   <button class="button primary-bg btn-block">postuler</button>
                                                 </form>
                                               </div>
                                             </div>
                                           </div>
                                         </div>
                                       </div>

            @endforeach
             @endsection 