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
          <div class="dashboard-content-wrapper no-padding">
            <div class="dashboard-message-wrapper">
              <div class="message-lists">
               @foreach($contacts as $contacts)
             <form action="{{ url('message')}}" method="post">
               {{ csrf_field() }}
                <a href="#" class="message-single">
                   <div class="thumb">
                    <img src="/images/avatars/{{ $contacts->candidat['avatar'] }}" class="img-fluid" alt="">
                  </div> 
                  <div class="body">
                    <h6 class="username">{{ $contacts->candidat['nom']}} {{ $contacts->candidat['prenom']}}</h6>
                    <!-- <span class="text-number">2</span> -->
                  </div>
                </a>
                     </form>
         
                 
                      </div>

                      <div class="message-box">
                    <div class="message-box-header">
                      <a href="#"><i class="fas fa-ellipsis-h"></i></a>
                      <h5>{{ $contacts->candidat['nom']}}</h5>
                    </div>
                    <ul class="dashboard-conversation">
                      <li class="conversation in">
                        <div class="avater">
                          <img src="dashboard/images/avater-1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="message"><span>{{ $contacts->message}}</span></div>
                        <span class="send-time">2.32 am</span>
                      </li>
                      </ul>
                   </div>
                   @endforeach
                </div>
             </div>
          </div> 
        </div>
      </div>
    </div>

 @endsection 