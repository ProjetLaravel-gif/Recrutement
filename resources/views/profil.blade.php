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
            @include('layouts/lool')
            </div>
          </div>
        </div>
      </div>
    </div>
</div>



@endsection