
@extends('layouts.master')
@section('content')
<div class="dashboard-bookmarked">
	
                  
                  @foreach($favoris as $favori)
                 
                  <form action="{{ url('favoris') }}" method="post">
                {{ csrf_field() }}
                  <div class="bookmark-area">
                    <div class="job-list">
                      <div class="thumb">
                        <a href="#">
                          <img src="images/job/company-logo-1.png" class="img-fluid" alt="">
                        </a>
                      </div>
                      <div class="body">
                        <div class="content">
                          <h4><a href="job-details.html">{{ $favori->intitule }}</a></h4>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $favori->dommaine }}</a></span>
                            <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $favori->ville }}</a></span>
                            <span class="job-type full-time"><a href="#"><i data-feather="clock"></i>{{ $favori->duree }}</a></span>
                          </div>
                        </div>
                        <div class="more">
                          
                          <a href="#" class="bookmark-remove"><i class="fas fa-times"></i></a>
                          <p class="deadline">Deadline: Oct 31,  2019</p>
                        </div>
                      </div>
                    </div>
                    </div>
                    @endforeach
                </div>
              
@endsection