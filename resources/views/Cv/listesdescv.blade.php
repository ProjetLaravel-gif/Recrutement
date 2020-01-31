@extends('layouts.master_candidat')
@section('candidat')

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
                <div class="manage-job-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>cv Title</th>
                        <th>Date Depot</th>
                        
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($cvs as $cvs)
                                         <form action="{{ url('cvs/'.$cvs->id) }}" method="post">
                                             {{ csrf_field() }}
                                             {{ method_field('DELETE') }}

                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">{{ $cvs->titre }}</a></h5>
                          <div class="info">
                            @foreach($cvs->formations as $formation)
                              <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $formation->diplome }}</a></span>
                           @endforeach
                                               
                          </div>
                        </td>
                        @php
                                             $depot = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $cvs->created_at);
                                             @endphp
                        <td class="deadline">{{$depot}}</td>
                       
                        
                        <td class="action">
                          <a href="{{  url('cvs/'.$cvs->id.'/details') }}" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="{{ url('cvs/'.$cvs->id.'/edit') }}" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#supprimer{{ $cvs->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
                      @endforeach
                       </tbody>
                  </table>
                  </div>
              </div>

                   <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="dashboard/images/company-logo.png" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>Degoin</h5>
                    <span>@username</span>
                  </div>
                </div>
                <div class="profile-progress">
                  <div class="progress-item">
                    <div class="progress-head">
                      <p class="progress-on">Profile</p>
                    </div>
                    <div class="progress-body">
                      <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                      </div>
                      <p class="progress-to">70%</p>
                    </div>
                  </div>
                </div>
                <div class="dashboard-menu">
                  <ul>
                    <li><i class="fas fa-home"></i><a href="employer-dashboard.html">Dashboard</a></li>
                    <li><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                    <li class="active"><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.html">Manage Jobs</a></li>
                    <li><i class="fas fa-users"></i><a href="employer-dashboard-manage-candidate.html">Manage Candidates</a></li>
                    <li><i class="fas fa-heart"></i><a href="#">Shortlisted Resumes</a></li>
                    <li><i class="fas fa-plus-square"></i><a href="employer-dashboard-post-job.html">Post New Job</a></li>
                    <li><i class="fas fa-comment"></i><a href="employer-dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="employer-dashboard-pricing.html">Pricing Plans</a></li>
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="#">Logout</a></li>
                    <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">Delete Profile</a></li>
                  </ul>
                  <!-- Modal -->
                 <div class="modal fade" id="supprimer{{ $cvs->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $cvs->id }}ModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                    
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body text-center">
                                      Voulez-vous vraiment effectuer la suppression ? 
                                  </div>
                                  <div class="modal-footer">
                                      <form class="form-inline" action="{{ url('cvs/'.$cvs->id)}}"  method="POST">
                                          @method('DELETE')
                                          @csrf
                                      <button type="button" class="btn btn-light" data-dismiss="modal">annuler</button>
                                          <button type="submit" class="btn btn-danger">supprimer</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
         </form>



@endsection
                      