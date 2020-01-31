@extends('layouts.master')
@section('content')


    <!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1>Candidate Dashboard</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Candidate Dashboard</li>
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
    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper">
                   
                      <form action="{{url ('cvs/'.$cvs->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                                       {{ csrf_field() }}
                                       <input type="hidden" name="candidat_id" value="{{$cvs->candidat_id}}">
          <!--       <div class="download-resume dashboard-section">
                  <div class="update-file">
                    <input type="file">
Mettre à jour le CV <i data-feather="edit-2"></i>
                  </div>
                  <div class="update-file">
                    <input type="file">Mettre à jour la lettre d'accompagnement <i data-feather="edit-2"></i>
                  </div>
                  <span>
Télécharger un fichier PDF</span>
                </div> -->
                <div class="skill-and-profile dashboard-section">
                  <div class="skill">
<!--                     <label>
Compétences:</label> -->
                    <!-- <a href="#">Design</a>
                    <a href="#">Illustration</a>
                    <a href="#">iOS</a> -->
                    <!-- Button trigger modal -->
                   <!--  <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-skill">
                      <i data-feather="edit-2"></i>
                    </button> -->
                    <!-- Modal -->
                    <div class="modal fade" id="modal-skill" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>Mes Compétences</h4>
                              <a href="#" class="add-more">+ Ajouter des compétences</a>
                            </div>
                            <div class="content">
                        
                       <input type="hidden" name="candidat_id" value="{{$cvs->candidat_id}}">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">
Type Compétences</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">01</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">02</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">03</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">04</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">05</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">06</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      <button class="primary-bg">Enregistrer la mise à jour</button>
                                      <button class="" data-dismiss="modal">
Annuler</button>
                                    </div>
                                  </div>
                                </div>
                             
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="social-profile">
                    <label>Social:</label>
                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-google-plus"></i></a>
                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#"><i class="fab fa-pinterest-p"></i></a>
                    <a href="#"><i class="fab fa-behance"></i></a>
                    <a href="#"><i class="fab fa-dribbble"></i></a>
                    <a href="#"><i class="fab fa-github"></i></a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-social">
                      <i data-feather="edit-2"></i>
                    </button>
                    <br>
                    <br>
                    <br>
                    <!-- Modal -->
                    <div class="modal fade" id="modal-social" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog" role="document">
                        <div class="modal-content">
                          <div class="modal-body">
                            <div class="title">
                              <h4><i data-feather="git-branch"></i>Social Networks</h4>
                              <a href="#" class="add-more">+ Add Social</a>
                            </div>
                            <div class="content">
                              <form action="#">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">Social Links</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-facebook-f"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="facebook.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-twitter"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="twitter.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-google-plus"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="google.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-linkedin-in"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="linkedin.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-pinterest-p"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="pinterest.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-instagram"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="instagram.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-behance"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="behance.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-dribbble"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="dribbble.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fab fa-github"></i></div>
                                      </div>
                                      <input type="text" class="form-control"  placeholder="github.com/username">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
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
                                      <input type="text" class="form-control"  placeholder="Input Profile Link">
                                    </div>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="buttons">
                                      <button class="primary-bg">Save Update</button>
                                      <button class="" data-dismiss="modal">Cancel</button>
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
           
                   <div class="edication-background details-section dashboard-section">
                                   <h4><i data-feather="book"></i>Formations</h4>
                                    @foreach($cvs->formations as $formation)
                                   <div class="education-label">
                                      <span class="study-year">{{ $formation->date_debut }}-{{ $formation->date_fin }}</span>
                                      <h5>{{ $formation->diplome }}<span>{{ $formation->lieu }} </span></h5>
                                     <h5>{{ $formation->domaine }}<!-- <span>@ {{ $formation->domaine }} </span> --></h5>
                                   </div>
                                   
                                   <!-- Button trigger modal -->
                                   <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-education">
                                     <i data-feather="edit-2"></i>
                                   </button>
                                   <!-- Modal -->

                                    <div class="modal fade modal-education" id="modal-education" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="book"></i>Education</h4>
                            <a href="#" class="add-more">+ Ajouter Education</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Diplome</div>
                                      </div>
                                      <input type="text" class="form-control" name="diplome" value="{{ $formation->diplome}}" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Lieu</div>
                                      </div>
                                      <input type="text" class="form-control" name="lieu" value="{{ $formation->lieu}}" >
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Date-Debut</div>
                                      </div>
                                      <input type="text" class="form-control" name="date_debut" value="{{ $formation->date_debut}}" >
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Date-FIN</div>
                                      </div>
                                      <input type="text" class="form-control" name="Date-fin"  value="{{ $formation->date_fin}}" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Domaine</div>
                                      </div>
                                      <input type="text" class="form-control" name="domaine" value="{{ $formation->domaine}}" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                            
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enregistrer la mise à jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                    
                  </div>  
                   @endforeach     
                 </div>             
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i> Experience</h4>
                  @foreach($cvs->experiences as $experience)
                  <div class="experience-section">
                    <span class="service-year">{{ $experience->date_debut }}-{{ $experience->date_fin }}</span>
                    <h5>{{ $experience->intitule }}<span>{{ $experience->lieu }}</span></h5>
                    <p>{{ $experience->description }}</p>
                  </div>
                 
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-experience">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-experience" id="modal-experience" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="briefcase"></i>Experience</h4>
                            <a href="#" class="add-more">+ AjouterExperience</a>
                          </div>
                          <div class="content">
                           <form action="{{url ('cvs/'.$cvs->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                                                  {{ csrf_field() }}
                          <input type="hidden" name="cvv_id" value="{{$cvs->cvv_id}}">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Intitule</div>
                                      </div>
                                      <input type="text" class="form-control" name="intitule" value="{{ $experience->intitule}}" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Lieu</div>
                                      </div>
                                      <input type="text" class="form-control" name="lieu" value="{{ $experience->lieu}}" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Date-Debut</div>
                                      </div>
                                      <input type="text" class="form-control" name="date_debut" value="{{ $experience->date_debut}}">
                                    </div>
                                  </div>
                                </div>
                                 <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Date-Fin</div>
                                      </div>
                                      <input type="text" class="form-control" name="date_fin" value="{{ $experience->date_fin}}">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control" name="description" >{{ $experience->description}}</textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                             <!--  <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Titre</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Compagnie</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Periode</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div> -->
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enregistrer la mise à jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                   @endforeach
                </div>
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i> Competence</h4>
                  @foreach($cvs->competences as $competence)
                  <div class="experience-section">
                    <p>{{ $competence->description }}</p>
                  </div>
                                   <!-- Button trigger modal -->
                                   <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-pro-skill">
                                     <i data-feather="edit-2"></i>
                                   </button>
                                   <!-- Modal -->
                                   <div class="modal fade modal-pro-skill" id="modal-pro-skill" tabindex="-1" role="dialog" aria-hidden="true">
                                     <div class="modal-dialog" role="document">
                                       <div class="modal-content">
                                         <div class="modal-body">
                                           <div class="title">
                                             <h4><i data-feather="feather"></i>
                 Compétence professionnelle</h4>
                                             <a href="#" class="add-more">+ Ajouter Compétence</a>
                                           </div>
                                           <div class="content">
                                             <form action="{{url ('cvs/'.$cvs->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
                                                  {{ csrf_field() }}
                                  <input type="hidden" name="cv_iid" value="{{$cvs->cv_iid}}">
                                               <div class="input-block-wrap">
                                                 <div class="form-group row">
                                                   <label class="col-sm-3 col-form-label">compétence 01</label>
                                                   <div class="col-sm-9">
                                                     <div class="input-group">
                                                       <div class="input-group-prepend">
                                                         
                                                       </div>
                                                       <textarea class="form-control" name="description" >{{ $competence->description}}</textarea>
                                                     </div>
                                                   </div>
                                                 </div>
                                               
                                               </div>
                                               
                                             
                                               <div class="row">
                                                 <div class="offset-sm-3 col-sm-9">
                                                   <div class="buttons">
                                                     <button class="primary-bg">Enregistrer la mise à jour</button>
                                                     <button class="" data-dismiss="modal">Annuler</button>
                                                   </div>
                                                 </div>
                                               </div>
                                             </form>
                                           </div>
                                         </div>
                                       </div>
                                     </div>
                                   </div>
                   @endforeach
                </div>
               <!-- <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>
Compétence professionnelle</h4>
                  <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting</p>
                  <div class="progress-group">
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">Photoshop</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">70%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">HTML/CSS</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">90%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">JavaScript</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">74%</p>
                      </div>
                    </div>
                    <div class="progress-item">
                      <div class="progress-head">
                        <p class="progress-on">PHP</p>
                      </div>
                      <div class="progress-body">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" aria-valuenow="86" aria-valuemin="0" aria-valuemax="100" style="width: 0;"></div>
                        </div>
                        <p class="progress-to">86%</p>
                      </div>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                 <!--  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-pro-skill">
                    <i data-feather="edit-2"></i>
                  </button> -->
                  <!-- Modal -->
                 <!--  <div class="modal fade modal-pro-skill" id="modal-pro-skill" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="feather"></i>
Compétence professionnelle</h4>
                            <a href="#" class="add-more">+ Ajouter Compétence</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">
A propos de la compétence</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">compétence 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">
Nom de la compétence</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Pourcentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">compétence  02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Nom de la compétence</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Pourcentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">compétence  03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Nom de la compétence</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Pourcentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">compétence  04</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Nom de la compétence</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Pourcentage</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enregistrer la mise à jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div> -->
               <div class="special-qualification dashboard-section details-section">
                  <h4><i data-feather="gift"></i>
Une qualification spéciale</h4>
                  <ul>
                    <li>
5 ans + d'expérience dans la conception et la fabrication de produits.</li>
                    <li>
Qualifié à n'importe quel type d'outils de conception.</li>
                    <li>Passion pour le design centré sur l’être humain, intuition solide.</li>
                    <li>Hard Worker & Quick Lerner.</li>
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-qualification">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-qualification" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>Une qualification spéciale</h4>
                            <a href="#" class="add-more">+ 
Ajouter un autre</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Tapez ici/label>
                                <div class="col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">01</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">02</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">03</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">04</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="form-group row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text">05</div>
                                    </div>
                                    <input type="text" class="form-control" >
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enregistrer la mise à jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--   <div class="portfolio dashboard-section details-section">
                  <h4><i data-feather="gift"></i>
Portefeuille</h4>
                  <div class="portfolio-slider owl-carousel">
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-1.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-3.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                    <div class="portfolio-item">
                      <img src="images/portfolio/thumb-2.jpg" class="img-fluid" alt="">
                      <div class="overlay">
                        <a href="#"><i data-feather="eye"></i></a>
                        <a href="#"><i data-feather="link"></i></a>
                      </div>
                    </div>
                  </div>

                  <!-- Button trigger modal -->
                 <!--  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-portfolio">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <!-- <div class="modal fade modal-portfolio" id="modal-portfolio" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="grid"></i>
Portefeuille</h4>
                            <a href="#" class="add-more">+ Ajouter un autre</a>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">
Portefeuille 01</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Titre</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Changee L'avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Lien</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">
Portefeuille 02</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Titre</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Changer l'avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Lien</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="input-block-wrap">
                                <div class="form-group row">
                                  <label class="col-sm-3 col-form-label">
Portefeuille 03</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Titre</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Image</div>
                                      </div>
                                      <div class="upload-profile-photo">
                                        <div class="update-photo">
                                          <img class="image" src="images/portfolio/thumb-1.jpg" alt="">
                                        </div>
                                        <div class="file-upload">            
                                          <input type="file" class="file-input">Changer L'avatar
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text">Lien</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enregistrer la mise à jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>  -->
               <div class="personal-information dashboard-section last-child details-section">
                  <h4><i data-feather="user-plus"></i>Détails personnels</h4>
                  <ul>
                    <li><span>Nom complet:</span> Yasmine Fandir</li>
   <!--                  <li><span>
Le nom du père:</span> Howard Armour</li>
                    <li><span>
Le nom de la mère:</span> Megan Higbee</li> -->
                    <li><span>Date DE Naissance:</span> 24/02/1997</li>
                    <li><span>
Nationalité:</span> Algerienne </li>
                    <li><span>Sexe:</span> Femme</li>
                    <li><span>Addresse:</span> 15 hai ennour imama</li>
                  </ul>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-personal-details">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-personal-details" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="user-plus"></i>Détails personnels</h4>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nom complet</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Micheal N. Taylor">
                                </div>
                              </div>
                              <div class="form-group row">
                                <!-- <label class="col-sm-3 col-form-label">Father’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Howard Armour">
                                </div> -->
                              </div>
                              <div class="form-group row">
                                <!-- <label class="col-sm-3 col-form-label">Mother’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Megan Higbee">
                                </div> -->
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Date De Naissance</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="22/08/1992">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Nationalité</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="American">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Le sexe</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Male">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">l'Age</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="25 Years">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Addresse</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="2018 Nelm Street, Beltsville, VA 20705">
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button class="primary-bg">Enrengistrer les mises a jour</button>
                                    <button class="" data-dismiss="modal">Annuler</button>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             <div class="dashboard-sidebar">
                <div class="user-info">
                  <div class="thumb">
                    <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="user-body">
                    <h5>Lula Wallace</h5>
                    <span>@username</span>
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
                    <li><i class="fas fa-home"></i><a href="dashboard.html">
Tableau de bord</a></li>
                    <li><i class="fas fa-user"></i><a href="dashboard-edit-profile.html">
Editer le profil</a></li>
                    <li><i class="fas fa-file-alt"></i><a href="resume.html">CV</a></li>
                    <li class="active"><i class="fas fa-edit"></i><a href="edit-resume.html">
Modifier le CV</a></li>
                    <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">
Favoris</a></li>
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Emploi appliqué</a></li>
                    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                    <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">
Plans de tarification</a></li>
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a href="#">
Se déconnecter</a></li>
                    <li><i class="fas fa-trash-alt"></i><a href="#" data-toggle="modal" data-target="#modal-delete">
Supprimer le profil</a></li>
                  </ul>
                  <!-- Modal -->
                  <div class="modal fade modal-delete" id="modal-delete" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <h4><i data-feather="trash-2"></i>Supprimer le compte</h4>
                          <p>
                           Êtes-vous sûr! Vous voulez supprimer votre profil. Cela ne peut pas être annulé!</p>
                          <form action="#">
                            <div class="form-group">
                              <input type="password" class="form-control" placeholder="Enter password">
                            </div>
                            <div class="buttons">
                              <button class="delete-button">Enregistrer la mise à jour</button>
                              <button class="" data-dismiss="modal">Annuler</button>
                            </div>
                            <div class="form-group form-check">
                              <input type="checkbox" class="form-check-input" checked="">
                              <label class="form-check-label">Vous accepte notre<a href="#">Termes et conditions</a> et<a href="#">Politique de confidentialité</a></label>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           </form>
            </div>
          </div>
        </div>
      </div>
    </div>
     <!-- Call to Action -->
    <div class="call-to-action-bg padding-top-90 padding-bottom-90">
      <div class="container">
        <div class="row">
          <div class="col">
            <div class="call-to-action-2">
              <div class="call-to-action-content">
                <h2>
Pour trouver votre emploi de rêve ou votre candidat</h2>
                <p>Ajouter un CV ou publier un poste. Lorem ipsum dolor sit amet, consectetur elip adipiscing elit. Ut elit tellus, luctus nca.</p>
              </div>
              <div class="call-to-action-button">
                <a href="add-resume.html" class="button">Ajouter CV</a>
                <span>Ou</span>
                <a href="post-job.html" class="button">
Publier une offre</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Call to Action End -->

@endsection