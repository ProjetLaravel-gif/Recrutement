@extends('layouts.master')
@section('content')
<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1>Employer Dashboard</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">candidat Dashboard</li>
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
          <div class="dashboard-content-wrapper no-padding">
            <div class="dashboard-message-wrapper">
              <div class="message-lists">
               @foreach($contacts as $contacts)
             <form action="{{ url('message')}}" method="post">
               {{ csrf_field() }}
                <a href="#" class="message-single">
                   <div class="thumb">
                    <img src="/images/avatars/{{ $contacts->recruteur['logo'] }}" class="img-fluid" alt="">
                  </div> 
                  <div class="body">
                    <h6 class="username">{{ $contacts->recruteur['nom']}}</h6>
                    <a href="" class="preview" title="Preview" data-toggle="modal" data-target="#apply-popup-id"><i data-feather="eye"></i></a>
                    <!-- <span class="text-number">2</span> -->
                  </div>
                </a>
                     </form>
         
                 
                      

                    <div class="apply-popup">
                                         <div class="modal fade" id="apply-popup-id" tabindex="-1" role="dialog" aria-hidden="true">
                                           <div class="modal-dialog" role="document">
                                             <div class="modal-content">
                                               <div class="modal-header">
                                                 
                                                 <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                   <span aria-hidden="true">&times;</span>
                                                 </button>
                                               </div>
                                               <div class="modal-body">
                                                 
                                               <p><b>NOM:</b>&nbsp;{{$contacts->recruteur['nom']}}</p><br>
                                                 <p><b>EMAIL:</b>&nbsp;{{$contacts->email}}</p><br>
                                                 <p><b>EMAIL:</b>&nbsp;{{$contacts->numero}}</p><br>
                                                 <p><b>OBJET:</b>&nbsp;{{$contacts->objet}}</p><br>
                                                 <p><b>MESSAGE:</b>&nbsp;{{$contacts->message}}</p>
                                                
                                                
                                                  
                                               </div>
                                             </div>
                                           </div>
                                         </div>
                                       </div>
                   @endforeach
                      
            </div>
                </div>
             </div>
          </div> 
        </div>
      </div>
    </div>

 @endsection 