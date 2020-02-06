 
@extends('layouts.master_recruteur')
@section('recruteur')


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
                <div class="manage-candidate-container">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Job Title</th>
                        <th>Status</th>
                        <th class="action">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                       @foreach($postules as $postules)
                      <tr class="candidates-list">
                        <td class="title">
                          <div class="thumb">
                            <img src="/images/avatars/{{$postules->avatar }}" class="img-fluid" alt="">
                          </div>
                          <div class="body">
                            <h5><a href="#">{{$postules->civilite}}  {{$postules->nom}}  {{$postules->prenom}}</a></h5>
                          </div>
                        </td>
                        <td class="status"><i data-feather="check-circle"></i>Shortlisted</td>
                        <td class="action">
                          <a href="" class="preview" title="Preview" data-toggle="modal" data-target="#apply-popup-id"><i data-feather="eye"></i></a>
                          <a href="#" class="download"><i data-feather="download"></i></a>
                          <a href="{{ url('contact1/createCc/'.$postules->candidat_id) }}" class="inbox"><i data-feather="mail"></i></a>


                            <a href="#supprimer{{ $postules->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i data-feather="trash-2"></i></a>
                          <div class="modal fade" id="supprimer{{ $postules->id }}Modal" tabindex="-1" role="dialog" aria-labelledby="supprimer{{ $postules->id }}ModalLabel" aria-hidden="true">
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
                                      <form class="form-inline" action="{{ url('postules/'.$postules->id)}}"  method="POST">
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
                       </tr>

                        <div class="apply-popup">
                                         <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                               <div class="modal-header">
                                                 <h5 class="modal-title"><i data-feather="edit"></i>{{$postules->nom}}</h5>
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                 </button>
                                               </div>
                                               <div class="modal-body">
                                                 
                                               <p>message:{{$postules->message}}</p>
                                                <!-- <a href="storage/app/cv/{{ $postules->cv }}"target="_blank"></a> -->
                                                <a href="{{ url('stp/'.$postules->cv)}}"><i class="icon-download-alt"></i>telecharger:{{$postules->cv}}</a>
                                                  
                                               </div>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                       @endforeach
                    </tbody>
                  </table>
                  <div class="pagination-list text-center">
                    <nav class="navigation pagination">
                      <div class="nav-links">
                        <a class="prev page-numbers" href="#"><i class="fas fa-angle-left"></i></a>
                        <a class="page-numbers" href="#">1</a>
                        <span aria-current="page" class="page-numbers current">2</span>
                        <a class="page-numbers" href="#">3</a>
                        <a class="page-numbers" href="#">4</a>
                        <a class="next page-numbers" href="#"><i class="fas fa-angle-right"></i></a>
                      </div>
                    </nav>                
                  </div>
                </div>
              </div>
             @include('layouts/sidebar_recruteur')
            </div>
          </div>
        </div>
      </div>
    </div>

    @endsection