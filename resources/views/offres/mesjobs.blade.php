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

                        


                        
                        <td class="status active"><a href="{{ url('statut/'.$offres->id) }}" class="button">publier</a></td>

                        <td class="action">
                          <a href="{{ url('offres/'.$offres->id.'/detail') }}" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="{{ url('offres/'.$offres->id.'/edito') }}" class="edit" title="Edit"><i data-feather="edit"></i></a>
                          <!-- <a href="#supprimer{{ $offres->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i data-feather="trash-2"></i></a> -->
                          <a href="#supprimer{{ $offres->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
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
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                        </td>
                      </tr>
                       </form>
              @endforeach
                       </tbody>
                  </table>
                  </div> 
                       
             

             </div>
              @include('layouts/sidebar_recruteur')
          </div>
        </div>
      </div>
    </div>
        
 

    @endsection