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
                <form action="{{url ('recruteur/'.$recruteur->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                  <div class="dashboard-section upload-profile-photo">
                   <div class="update-photo">
                      <img class="image" src="/images/logo/{{ $recruteur->logo }}" alt="">
                  </div>
                      <div class="file-upload">
                             <form enctype="multipart/form-data" action="{{ route('profil1') }}" method="POST">
                                     <input type="file" class="file-input" name="logo">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                    <input type="submit" class="file-input">Changer logo
                            </form>
                        </div>
                      </div> 
                  <div class="dashboard-section basic-info-input">
                    <br>
                    <br>
                    <br>
                    <br>
                       

                   <div class="form-group row">
                      <label class="col-sm-3 col-form-label">nom</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom" placeholder="Company Name" value="{{ $recruteur->nom}}">
                      </div>
                    </div>

          <div id="job-summery" class="row">
                      <label class="col-md-3 col-form-label">type</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <select class="form-control" name="type" value="{{ $recruteur->type}}">
                                <option>public</option>
                                <option>privé</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Phone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="numtel" value="{{$recruteur->numtel}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="adresse" value="{{$recruteur->adresse}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">site web</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="siteweb" value="{{$recruteur->siteweb}}">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Address</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="{{$recruteur->email}}">
                      </div>
                    </div>

                    <!-- <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">modifier</button>
                      </div>
                    </div> -->

                </div>
             <!--      <div class="dashboard-section media-inputs">
                    <h4><i data-feather="image"></i>Photo &amp; Video</h4>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Intro Video</label>
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Link</div>
                          </div>
                          <input type="text" class="form-control" placeholder="https://www.youtube.com/watch?v=ZRkdyjJ_489M">
                        </div>
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Gallery</label>
                      <div class="col-sm-9">
                        <div class="input-group image-upload-input">
                          <div class="input-group-prepend">
                            <div class="input-group-text">Image</div>
                          </div>
                          <div class="active">
                            <div class="upload-images">
                              <div class="pic">
                                <span class="ti-plus"></span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div> -->
                  
<!-- 
                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Change Password</h4>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Current Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Current Password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">New Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="New Password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Retype Password</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Retype Password">
                      </div>
                    </div>

                    </div> -->

                   <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">modifier</button>
                        <a href="{{ url('recruteurdashboard') }}" class="btn "style="background-color:#0131B4; color: white;font-family:"ElMessiri-SemiBold";" >Annuler</a>
                      </div>
                    </div>

                
                </form>
              </div>
 @include('layouts/sidebar_recruteur')
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



@endsection