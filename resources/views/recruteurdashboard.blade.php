@extends('layouts.master_recruteur')
@section('recruteur')


    <!-- Breadcrumb -->
    <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Employer Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Employer Dashboard</li>
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
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                <div class="dashboard-section user-statistic-block">
                  <div class="user-statistic">
                    <i data-feather="command"></i>
                    <h3>06</h3>
                    <span>Total Job Posted</span>
                  </div>
                  <div class="user-statistic">
                    <i data-feather="file-text"></i>
                    <h3>123</h3>
                    <span>Application Submit</span>
                  </div>
                  <div class="user-statistic">
                    <i data-feather="users"></i>
                    <h3>32</h3>
                    <span>Call for interview</span>
                  </div>
                </div>
                <div class="dashboard-section dashboard-view-chart">
                  <canvas id="view-chart" width="400" height="200"></canvas>
                </div>


                <div class="dashboard-section dashboard-view-chart">
                  <canvas id="view-chart" width="400" height="200"></canvas>
                </div>
                
               
                


              </div>
               @include('layouts/sidebar_recruteur')
            </div>

          </div>
        </div>
      </div>
    </div>

    <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>For Find Your Dream Job or Candidate</h2>
                <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
              </div>
              <div class="call-to-action-button">
                <a href="#" class="button">Add Resume</a>
                <span>Or</span>
                <a href="{{ url('offres/createo/$offres->recruteur_id')}}" class="button">Post A Job</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

    <!-- Footer -->
   @endsection 