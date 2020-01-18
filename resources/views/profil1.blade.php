@extends('layouts.master_recruteur')
@section('recruteur')

<!-- <div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <img src="/images/logo/{{ $recruteur->logo }}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">logo</h2>
            <form enctype="multipart/form-data" action="{{ route('profil1') }}" method="POST">
                <label>Update logo Image</label>
                <input type="file" name="logo">
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
                <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>mon profil</h4>
                  <!-- <div class="dashboard-section upload-profile-photo">
                    <div class="update-photo">
                       <img class="image" src="/images/logo/{{ $recruteur->logo }}" alt="">
                    </div>
                    <div class="file-upload">
                      <form enctype="multipart/form-data" action="{{ route('profil1') }}" method="POST">
                        <input type="file" class="file-input" name="logo">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="file-input">Changer Avatar 
                         <input type="submit" class="pull-right btn btn-sm btn-primary">          
                       </form>
                    </div>
                  </div>  -->


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



                  <br>
                   <form action="{{url ('recruteur/'.$recruteur->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}

                       <!--  <div class="dashboard-section upload-profile-photo">
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
                      </div>  -->
                  <!-- <div class="dashboard-section basic-info-input">
                    <h4><i data-feather="user-check"></i>mon profil</h4> -->
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

                    </div>

                   <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">modifier</button>
                      </div>
                    </div>

                
                </form>
              </div>
              <div class="dashboard-sidebar">
                <div class="company-info">
                  <div class="thumb">
                    <img src="images/logo/{{ Auth::guard('recruteur')->user()->logo }}" class="img-fluid" alt="">
                  </div>
                  <div class="company-body">
                    <h5>{{ Auth::guard('recruteur')->user()->nom }}</h5>
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