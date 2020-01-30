@extends('layouts.master_candidat')
@section('candidat')

<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/avatars/{{ $candidat->avatar }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
            <h2>{{ $candidat->nom }}'s Profile</h2>
            <form enctype="multipart/form-data" action="{{ route('profil') }}" method="POST">
                <label>Update Profile Image</label>
                <input type="file" name="avatar">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>
    </div>
</div> -->
 <div class="alice-bg padding-top-70 padding-bottom-70">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="breadcrumb-area">
              <h1>Candidat Dashboard</h1>
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Candidat Dashboard</li>
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
                <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>Mon profil</h4>
             


                  <div class="dashboard-section upload-profile-photo">
                   <div class="update-photo">
                      <img class="image" src="/images/avatars/{{ $candidat->avatar }}" alt="">
                  </div>
                      <div class="file-upload">
                             <form enctype="multipart/form-data" action="{{ route('profil') }}" method="POST">
                                     <input type="file" class="file-input" name="avatar">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <input type="submit" class="pull-right btn btn-sm btn-primary">
                                    <input type="submit" class="file-input">Changer logo
                            </form>
                        </div>
                      </div> 



                  <br>
                   <form action="{{url ('candidat/'.$candidat->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                       
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">nom</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="nom" placeholder="Company Name" value="{{ $candidat->nom}}">
                      </div>
                    </div>
                       
                      <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Prenom</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="prenom" value="{{$candidat->prenom}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">civilite</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="civilite" value="{{$candidat->civilite}}">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Date De Naissance</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="datenaiss" value="{{$candidat->datenaiss}}">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Numero De Telephone</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="numtel" value="{{$candidat->numtel}}">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label"> Addresse Email </label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="email" value="{{$candidat->email}}">
                      </div>
                    </div>
                     <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Email Addresslinkedlin</label>
                      <div class="col-sm-9">
                        <input type="text" class="form-control" name="linkedlin" value="{{$candidat->linkedlin}}">
                      </div>
                    </div>

                    <!-- <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">modifier</button>
                      </div>
                    </div> -->

                </div>
             
                  <div class="dashboard-section social-inputs">
                    <h4><i data-feather="cast"></i>Social Networks</h4>
                   <!--  <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Social Links</label>
                    </div> -->
                    <div class="form-group row">
                      <div class="col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="facebook.com/username">
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="twitter.com/username">
                        </div>
                      </div>
                    </div>

                    <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group">
                          <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
                          </div>
                          <input type="text" class="form-control" placeholder="google.com/username">
                        </div>
                      </div>
                    </div>
                    <!-- <div class="form-group row">
                      <div class="offset-sm-3 col-sm-9">
                        <div class="input-group add-new">
                          <div class="input-group-prepend">
                            <div class="input-group-text dropdown-label">
                              <select class="form-control" id="exampleFormControlSelect1">
                                <option>Select</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                              </select><i class="fa fa-caret-down"></i>
                            </div>
                          </div>
                          <input type="text" class="form-control" placeholder="Input Profile Link">
                        </div>
                      </div>
                    </div> -->
                  </div>

                  <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="lock"></i>Changer le Mot De Passe</h4>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Mot de Passe Courant</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Current Password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Nouveau Mot De Passe</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="New Password">
                      </div>
                    </div>

                    <div class="form-group row">
                      <label class="col-sm-3 col-form-label">Retaper Le Mot De Passe</label>
                      <div class="col-sm-9">
                        <input type="password" class="form-control" placeholder="Retype Password">
                      </div>
                    </div>

                    </div>

                   <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">Modifier</button>
                      </div>
                    </div>

                
                </form>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="images/avatars/{{ Auth::guard('candidat')->user()->avatar }}" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>{{ Auth::guard('candidat')->user()->nom }}</h5>
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
                    <li class="active"><i class="fas fa-user"></i><a href="employer-dashboard-edit-profile.html">Edit Profile</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="employer-dashboard-manage-job.html">Manage Jobs</a></li>
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
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Delete Account</h4>
                          <p>Are you sure! You want to delete your profile. This can't be undone!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Save Update</button>
                              <button class="">Cancel</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a></label>
                            </div>
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
</div>



@endsection