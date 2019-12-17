@extends('layouts.master_recruteur')
@section('recruteur')


<div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="post-container">
              <div class="post-content-wrapper">
                  <div class="basic-info-input">
                  	 <form action="{{url ('offres/'.$offres->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                        {{ csrf_field() }}
                    <h4><i data-feather="plus-circle"></i>modifier l'offre</h4>
                    
                          <input type="hidden" name="recruteur_id" value="{{$offres->recruteur_id}}">

                    <div id="job-title" class="form-group row">
                      <label class="col-md-3 col-form-label">intitulé</label>
                      <div class="col-md-9">
                        <input type="text"  placeholder="votre intitulé içi" name="intitule" class="form-control" value="{{ $offres->intitule}}">
                      </div>
                    </div>


                    <div id="job-summery" class="row">
                      <label class="col-md-3 col-form-label">type</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control"name="type" value="{{ $offres->type}}">
                                <option>selectionez type</option>
                                <option>stage</option>
                                <option>CDD</option>
                                <option>CDI</option>
                              </select>
                          </div>
                      </div>
                  </div>
              </div>
          </div>


                    <div id="dommaine" class="form-group row">
                      <label class="col-md-3 col-form-label">dommaine</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="dommaine" name="dommaine" value="{{ $offres->dommaine}}">
                      </div>
                    </div>

                             
                    <div id="nombred'annesd'experiences" class="form-group row"> 
                    <label class="col-md-3 col-form-label">nombre d'annes d'experiences</label>    
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control"name="nbr_annee_experiences" value="{{ $offres->nbr_annee_experiences}}">
                                <option>nombre d'annes d'experiences</option>
                                <option>moins d'un an</option>
                                <option>2 ans</option>
                                <option>3 ans</option>
                                <option>4 ans</option>
                                <option>plus de 5 ans</option>
                              </select>
                              <!-- i class="fa fa-caret-down"></i> -->
                            </div>
                          </div>
                       </div>   


                      <div id="diplome" class="form-group row">
                      <label class="col-md-3 col-form-label">diplome</label>
                      <div class="col-md-9">
                        <input type="text" class="form-control" placeholder="diplome" name="dimplome" value="{{ $offres->dimplome}}">
                      </div>
                    </div>

                   
                   <div id="competences" class="form-group row">
                    <label class="col-md-3 col-form-label">competences</label>
                   <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="competences" name="competences" value="{{ $offres->competences}}">
                            </div>
                          </div>
                      </div>

                     <div id="renumeration" class="form-group row">
                     <label class="col-md-3 col-form-label">renumeration</label>
                    <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="renumeration" name="renumeration" value="{{ $offres->renumeration}}">
                            </div>
                          </div>
                           </div>


                          <div id="duree" class="form-group row">
                           <label class="col-md-3 col-form-label">durée</label>
                   <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="duree STAGE/CDD" name="duree" value="{{ $offres->duree}}">
                            </div>
                          </div>
                          </div>


                        <div id="dateprevu" class="form-group row">
                           <label class="col-md-3 col-form-label">date de debut prevue</label>
                          <div class="col-md-6">
                            <div class="form-group datepicker">
                              <input type="date" class="form-control" placeholder="date de debut prevue" name="date_debut_prevu" value="{{ $offres->date_debut_prevu}}">
                            </div>
                          </div>
                      </div>


                    <div id="post-location" class="form-group row">
                      <label class="col-md-3 col-form-label">lieu de travail</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <select class="form-control" name="ville" value="{{ $offres->ville}}">
                                <option>ville</option>
                                <option>tlemcen</option>
                                <option>oran</option>
                                <option>sba</option>
                                <option>ain temouchent</option>
                                <option>mostaganem</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="cartier" name="cartier">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="emplacement" name="emplacement" value="{{ $offres->emplacement}}">
                            </div>
                          </div>
                          <div class="col-md-6">
                            <div class="set-location">
                              <h5>emplacement</h5>
                              <div id="map-area" class="contact-location">
                                <div class="cp-map" id="location" data-lat="40.713355" data-lng="-74.005535" data-zoom="10"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>


                    <div id="about-company" class="row">
                      <label class="col-md-3 col-form-label">apropos de l'offre</label>
                      <div class="col-md-9">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="form-group">
                              <input type="text" class="form-control" placeholder="Web Address" name="webaddresse" value="{{ $offres->webaddresse}}">
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <textarea class="form-control" placeholder="petite description" name="description" value="{{ $offres->description}}"></textarea>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                   
                   <!--  <div class="row">
                      <div class="col-md-9 offset-md-3">
                        <div class="form-group terms">
                          <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                          <label for="radio-4">
                            <span class="dot"></span> j'accepte vos <a href="#">Terms et Conditions</a> et <a href="#">Privacy Policy</a>
                          </label>
                        </div>
                      </div>
                    </div> -->
                    <div class="form-group row">
                      <label class="col-md-3 col-form-label"></label>
                      <div class="col-md-9">
                        <button class="button">modifier offre</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

              <div class="post-sidebar">
                <h5><i data-feather="arrow-down-circle"></i>Navigation</h5>
                <ul class="sidebar-menu">
                  <li><a href="#job-title">intitulé</a></li>
                  <li><a href="#job-summery">type</a></li>
                  <li><a href="#dommaine">domaine</a></li>
                  <li><a href="#nombred'annesd'experiences">nombre d'annes d'experiences</a></li>
                  <li><a href="#response">diplome</a></li>
                  <li><a href="#competences">competences</a></li>
                  <li><a href="#renumeration">renumeration</a></li>
                  <li><a href="#rduree">durée</a></li>
                  <li><a href="#dateprevu">date de debut prévue</a></li>
                  <li><a href="#post-location">lieu de travail</a></li>
                  <li><a href="#about-company">a propos de l'offre</a></li>
                  
                </ul>
            </div>
        </div>
    </div>
</div>
</div>
</div>



 @endsection 