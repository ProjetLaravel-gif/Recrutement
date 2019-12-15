@extends('layouts.master')
@section('content')

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
          <form action="{{ url('cvs') }}" method="post">
            @csrf 
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
          <div class="post-content-wrapper" id="app">
            <form action="#" class="job-post-form">
              <div class="basic-info-input">
                



                          @yield('yasmine')
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

                @endsection