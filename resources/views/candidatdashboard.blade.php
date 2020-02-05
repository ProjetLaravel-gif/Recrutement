@extends('layouts.master')
@section('content')


<div class="alice-bg section-padding-bottom">
  <div class="container no-gliters">
    <div class="row no-gliters">
      <div class="col">
        <div class="dashboard-container">
          <div class="dashboard-content-wrapper">
            <div class="dashboard-section user-statistic-block">
              <div class="user-statistic">
                <i data-feather="pie-chart"></i>
                <h3>132</h3>
                <span>Companies Viewed</span>
              </div>
              <div class="user-statistic">
                <i data-feather="briefcase"></i>
                <h3>12</h3>
                <span>Applied Jobs</span>
              </div>
              <div class="user-statistic">
                <i data-feather="heart"></i>
                <h3>32</h3>
                <span>Favourite Jobs</span>
              </div>
            </div>
            <div class="dashboard-section dashboard-view-chart">
              <canvas id="view-chart" width="400" height="200"></canvas>
            </div>
            <div class="dashboard-section dashboard-recent-activity">
              <h4 class="title">Recent Activity</h4>
              <div class="activity-list">
                <i class="fas fa-bolt"></i>
                <div class="content">
                  <h5>Your Resume Updated!</h5>
                  <span class="time">5 hours ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
              <div class="activity-list">
                <i class="fas fa-arrow-circle-down"></i>
                <div class="content">
                  <h5>Someone downloaded your resume.</h5>
                  <span class="time">11 hours ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
              <div class="activity-list">
                <i class="fas fa-check-square"></i>
                <div class="content">
                  <h5>You applied for Project Manager @homeland</h5>
                  <span class="time">11 hours ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
              <div class="activity-list">
                <i class="fas fa-check-square"></i>
                <div class="content">
                  <h5>You applied for Project Manager @homeland</h5>
                  <span class="time">5 hours ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
              <div class="activity-list">
                <i class="fas fa-user"></i>
                <div class="content">
                  <h5>You changed password successfuly</h5>
                  <span class="time">2 days ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
              <div class="activity-list">
                <i class="fas fa-heart"></i>
                <div class="content">
                  <h5>Someone bookmarked you</h5>
                  <span class="time">3 days ago</span>
                </div>
                <div class="close-activity">
                  <i class="fas fa-times"></i>
                </div>
              </div>
            </div>
          </div>
       @include('layouts/lool')
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
            <a href="add-resume.html" class="button">Add Resume</a>
            <span>Or</span>
            <a href="post-job.html" class="button">Post A Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call to Action End -->
@endsection