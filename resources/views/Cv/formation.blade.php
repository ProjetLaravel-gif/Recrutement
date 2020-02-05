 @extends('layouts.master')
@section('content')


 <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Add Resume</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">ajouter cv</li>

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

    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="post-container">

              <div class="post-content-wrapper">

               
                
                    <form action="{{ url('formations') }}" class="job-post-form"  method="post">
                      {{ csrf_field() }}
                      <input type="hidden" name="cv_id" value="{{$cv_id}}">
                  <div class="basic-info-input">

                    <h4><i data-feather="plus-circle"></i>Ajouter CV 
                    <button   onclick="$('#ajout_formation').show();" style="margin-left: 600px; ">+ Ajouter Formation</button>
                     </h4> 
                    
                  
                      <input type="hidden" name="cv_id" value="{{$cv_id}}">

                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">Diplome</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" name="diplome"  placeholder=" Diplome">
                      </div>
                    </div>
                    
                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">lieux</label>
                      <div class="col-md-9">
                        <input type="text" name="lieu"  class="form-control" placeholder="lieux">
                      </div>
                    </div>
                    
                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">Date debut</label>
                      <div class="col-md-9">
                        <input type="Date" name="date_debut" class="form-control" >
                      </div>
                    </div>
                    
                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">Date fin</label>
                      <div class="col-md-9">
                        <input type="Date"  name="date_fin" class="form-control" >
                      </div>
                    </div>
                    
                    <div id="full-name" class="form-group row">
                      <label class="col-md-3 col-form-label">Domaine</label>
                      <div class="col-md-9">
                        <input type="text"  name="domaine" class="form-control" placeholder="Domaine">
                      </div>
                    </div>
                    
         
                    
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">Suivant</button>
                      </div>
                    </div>

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
    @endsection