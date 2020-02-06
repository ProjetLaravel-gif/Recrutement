@extends('layouts.master_candidat')
@section('candidat')


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
                         
                        </td>
                        @php
                                             $depot = \Carbon\Carbon::createFromFormat('Y-m-d H:s:i', $cvs->created_at);
                                             @endphp
                        <td class="deadline">{{$depot}}</td>
                       
                        
                        <td class="action">
                          <a href="{{  url('cvs/'.$cvs->id.'/details') }}" class="preview" title="Preview"><i data-feather="eye"></i></a>
                          <a href="{{ url('cvs/'.$cvs->id.'/edit') }}" class="edit" title="Edit"><i data-feather="edit"></i></a>

                          <a href="#supprimer{{ $cvs->id }}Modal" role="button" class="btn btn-danger" data-toggle="modal"><i data-feather="trash-2"></i></a>

                          
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
                                      <button type="button" class="btn btn-light" data-dismiss="modal">Non</button>
                                          <button type="submit" class="btn btn-danger">Oui</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                        </td>
                      </tr>
                      @endforeach
                       </tbody>
                  </table>
                  </div>
              </div>

               @include('layouts/lool') 


            </div>
          </div>
        </div>
      </div>
    </div>
         </form>



@endsection
                      