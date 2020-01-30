@extends('layouts.master_recruteur')
@section('recruteur')

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
                        <th>Job Title</th>
                        <th>Date Depot</th>
                        <th>Statut</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                    	 @foreach($offres as $offres)
                                         <form action="{{ url('offres/'.$offres->id) }}" method="post">
                                             {{ csrf_field() }}
                                             {{ method_field('DELETE') }}

                      <tr class="job-items">
                        <td class="title">
                          <h5><a href="#">{{ $offres->intitule }}</a></h5>
                          <div class="info">
                            <span class="company"><a href="#"><i data-feather="briefcase"></i>{{ $offres->dommaine }}</a></span>
                                               <span class="office-location"><a href="#"><i data-feather="map-pin"></i>{{ $offres->ville }}</a></span>
                                              
                                               <span class="job-type part-time"><a href="#"><i data-feather="clock"></i>{{ $offres->duree }}</a></span>
                          </div>
                        </td>
                        @php
                                             $depot = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $offres->created_at);
                                             @endphp
                        <td class="deadline">{{$depot}}</td>
                        <td class="status active">Active</td>
                        <td class="action">
                          <a href="{{ url('offres/'.$offres->id.'/detail') }}" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="{{ url('offres/'.$offres->id.'/edito') }}" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <a href="#supprimer{{ $offres->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i data-feather="trash-2"></i></a>
                        </td>
                      </tr>
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
                 <div class="modal fade" id="supprimer{{ $offres->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $offres->id }}ModalLabel" aria-hidden="true">
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
                                      <form class="form-inline" action="{{ url('offres/'.$offres->id)}}"  method="POST">
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
         </form>
@endforeach


    @endsection