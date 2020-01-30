 <!Doctype html>
 <html lang="en">
   
 <!-- Mirrored from themerail.com/html/oficiona/post-job.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 2019 21:29:48 GMT -->
 <head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <title>Recrutement</title>

     <!-- Bootstrap CSS -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap.min.css')}}">

     <!-- External Css -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/fontawesome-all.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/themify-icons.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/et-line.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/bootstrap-select.min.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/plyr.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/flag.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/slick.css')}}" /> 
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/owl.carousel.min.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/jquery.nstSlider.min.css')}}" />
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/html5-simple-date-input-polyfill.css')}}" />

     <!-- Custom Css -->
     <link rel="stylesheet" type="text/css" href="{{asset('assets/css/main.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('assets/css/dashboard.css')}}">

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600%7CRoboto:300i,400,500" rel="stylesheet">

     <!-- Favicon -->
     <link rel="icon" href="{{asset('images/favicon.png')}}">
     <link rel="apple-touch-icon" href="{{asset('images/apple-touch-icon.png')}}">
     <link rel="apple-touch-icon" sizes="72x72" href="{{asset('images/icon-72x72.png')}}">
     <link rel="apple-touch-icon" sizes="114x114" href="{{asset('images/icon-114x114.png')}}">


     <!--[if lt IE 9]>
     <script src="assets/js/html5shiv.min.js"></script>
     <script src="assets/js/respond.min.js"></script>
     <![endif]-->

   </head>
   <body>

  @include('layouts/_menu')
    <!-- Breadcrumb -->
    <div class="alice-bg section-padding-bottom">
      <div class="container no-gliters">
        <div class="row no-gliters">
          <div class="col">
            <div class="dashboard-container">
              <div class="dashboard-content-wrapper" id="app">
                <div class="download-resume dashboard-section">
                  <div class="update-file">
                    <input type="file">
Mettre à jour le CV <i data-feather="edit-2"></i>
                  </div>
                  <div class="update-file">
                    <input type="file">Mettre à jour la lettre d'accompagnement <i data-feather="edit-2"></i>
                  </div>
                  <span>
Télécharger un fichier PDF</span>
                </div>

                <div class="skill-and-profile dashboard-section">
                  <div class="skill">
                    <label>
Compétences:</label>
                    <a href="#">Design</a>
                    <a href="#">Illustration</a>
                    <a href="#">iOS</a>
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-primary edit-button" data-toggle="modal" data-target="#modal-skill">
                      <i data-feather="edit-2"></i>
                    </button>
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
                              <form action="#">
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
                              </form>
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
               <div class="about-details details-section dashboard-section">
                 <h4><i data-feather="align-left"></i>
À propos de moi</h4>
                  <p>Combiné avec une poignée de structures de phrases modèles, le lorem Ipsum a été généré. Il a survécu non seulement à cinq siècles, mais aussi au saut dans la composition électronique, demeurant essentiellement inchangé. Il a été popularisé dans les années 1960 avec la publication de feuilles Letraset contenant des passages de Lorem Ipsum, et plus récemment avec un logiciel de publication assistée par ordinateur comme Aldus PageMaker, notamment.

Richard McClintock, professeur de latin au Hampden-Sydney College en Virginie, a recherché l'un des mots latins les plus obscurs, consectetur, tiré d'un passage de Lorem Ipsum, et en parcourant les cités de ce mot dans la littérature classique, il a découvert l'incontournable </p>
                  <div class="information-and-contact">
                    <div class="information">
                      <h4>Information</h4>
                      <ul>
                        <li><span>Catégorie:</span> Design & Creative</li>
                        <li><span>
Emplacement:</span> ALgerie </li>
                        <li><span>Statut:</span> 
À plein temps</li>
                        <li><span>Experience:</span>3 années</li>
                        <li><span>
Échelle salariale:</span> 3millios-4millios</li>
                        <li><span>Le sexe :</span> 
Masculin</li>
                        <li><span>Age:</span> 22 Ans</li>
                        <li><span>Qualification:</span> Diplômé</li>
                      </ul>
                    </div>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-about-me">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade" id="modal-about-me" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4><i data-feather="align-left"></i>À propos de moi</h4>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
Ecrivez-vous</label>
                                <div class="col-sm-9">
                                  <textarea class="form-control" placeholder="Write Yourself"></textarea>
                                </div>
                              </div>
                              <h4><i data-feather="align-left"></i>Information</h4>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Catégorie</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Design &amp; Creative">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Emplacement</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder=" ALgerie">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Statut</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="À plein temps">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Experience</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="3 années">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">
Échelle salariale</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="3millios-4millios">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Le sexe </label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Masculin">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Age</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="22 ans">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Qualification</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder=Diplômé">
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
               <div class="edication-background details-section dashboard-section">
                  <h4><i data-feather="book"></i>Formations</h4>
                  <div class="education-label" v-for=" formation in formations">
                    <span class="study-year">@{{formation.date_debut}}- @{{formation.date_fin}}</span>
                    <h5>@{{formation.diplome}}<span>@{{formation.lieu}}</span></h5>
                    <p>@{{formation.domaine}}</p>
                  </div>
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-experience" @click="open = true" >
                   Ajouter Formation
                  </button>
                  <!-- Modal -->
                  <div >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4>Formation</h4>
                            <button type="button" class="btn btn-primary edit-resume" >
                            <a href="#" class="add-more" @click="open = true">+ Ajouter Formation</a> </button>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap" v-if="open">
                                <div class="form-group row">
                                 
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" formation.diplome">Diplome </div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" formation.lieu">
                                         lieu </div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" formation.date_debut">date_debut</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                 <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" formation.date_fin ">date_fin</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" formation.domaine">Domaine</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button type="button" class="btn btn-primary " @click="addExperience">
                                    Enregistrer la mise à jour</button>
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
                <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i> Experience</h4>
                  <div class="experience-section" v-for=" experience in experiences">
                    <span class="service-year">@{{experience.date_debut}}- @{{experience.date_fin}}</span>
                    <h5>@{{experience.intitule}}<span>@{{experience.lieu}}</span></h5>
                    <p>@{{experience.description}}</p>
                  </div>
                <!--   <div class="experience-section">
                    <span class="service-year">2012 - 2016</span>
                    <h5>Former Graphic Designer<span>@ Graphicreeeo CO</span></h5>
                    <p>Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage</p>
                  </div> -->
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-experience" @click="open = true" >
                   Ajouter Experience
                  </button>
                  <!-- Modal -->
                  <div >
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-body">
                          <div class="title">
                            <h4>Experience</h4>
                            <button type="button" class="btn btn-primary edit-resume" >
                            <a href="#" class="add-more">+ Ajouter Experience</a> </button>
                          </div>
                          <div class="content">
                            <form action="#">
                              <div class="input-block-wrap" v-if="open">
                                <div class="form-group row">
                          
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" experience.intitule">Intitule</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" experience.lieu">lieu</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                 <div class="form-group row">
                                  <div class="offset-sm-3 col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" experience.description">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" experience.date_debut">date_debut</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <div class="col-sm-9 offset-sm-3">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" experience.date_fin ">date_fin</div>
                                      </div>
                                      <input type="text" class="form-control" >
                                    </div>
                                  </div>
                                </div>
                                
                               
                              </div>
                              <div class="row">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button type="button" class="btn btn-primary " @click="addExperience">
                                    Enregistrer la mise à jour</button>
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
               <div class="professonal-skill dashboard-section details-section">
                  <h4><i data-feather="feather"></i>
                        Compétence professionnelle</h4>
                        <div v-for=" competence in competences">
                            <p>@{{competence.description}}</p></div>
                     <div class="title">
                            <button type="button" class="btn btn-primary edit-resume" >
                            <a href="#" class="add-more" @click="open = true">+ Ajouter Compétence</a> </button>
                          </div>        
                        
            <!--       <div class="progress-group">
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
                  </div> -->
                  <!-- Button trigger modal -->
                <!--   <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-pro-skill">
                    <i data-feather="edit-2"></i>
                  </button> -->
                  <!-- Modal -->
                  <div >
                    <div role="document">
                      <div class="modal-content">
                        <div >
                          <div class="title" style="padding-top: 4px; padding-left: 4px;">
                            <h4>
                               Compétence professionnelle</h4>
                            <div class="title">
                            <button type="button" class="btn btn-primary edit-resume" >
                            <a href="#" class="add-more">+ Ajouter Compétence</a> </button>
                          </div>
                          </div>
                              <div class="content">
                            <form action="#">
                              <div class="input-block-wrap" v-if="open">
                                <div class="form-group row" style="padding-left: 20px;">
                                  <label class="col-sm-3 col-form-label">
                               A propos de la compétence</label>
                                  <div class="col-sm-9">
                                    <div class="input-group">
                                      <div class="input-group-prepend">
                                        <div class="input-group-text" v-model=" competence.description">Description</div>
                                      </div>
                                      <textarea class="form-control"></textarea>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="row" style="padding-left: 20px;">
                                <div class="offset-sm-3 col-sm-9">
                                  <div class="buttons">
                                    <button type="button" class="btn btn-primary " @click="addCompetence">
                                    Enregistrer la mise à jour</button>
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
                  <div class="portfolio dashboard-section details-section">
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
                  <button type="button" class="btn btn-primary edit-resume" data-toggle="modal" data-target="#modal-portfolio">
                    <i data-feather="edit-2"></i>
                  </button>
                  <!-- Modal -->
                  <div class="modal fade modal-portfolio" id="modal-portfolio" tabindex="-1" role="dialog" aria-hidden="true">
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
                </div> 
               <div class="personal-information dashboard-section last-child details-section">
                  <h4><i data-feather="user-plus"></i>Détails personnels</h4>
                  <ul>
                    <li><span>Nom complet:</span> Yasmine Fandir</li>
                    <li><span>
Le nom du père:</span> Howard Armour</li>
                    <li><span>
Le nom de la mère:</span> Megan Higbee</li>
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
                                <label class="col-sm-3 col-form-label">Father’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Howard Armour">
                                </div>
                              </div>
                              <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Mother’s Name</label>
                                <div class="col-sm-9">
                                  <input type="text" class="form-control"  placeholder="Megan Higbee">
                                </div>
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
 @include('layouts/_footer')

 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="{{asset('assets/js/vue.js')}}"></script>
  <script >
    window.laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      'idFormation' => $id,
      'idExperience' => $id,
      'idCompetence' => $id,
      
       'url' => url('/')
     ])!!};
  </script>
  <script >
    var app = new Vue({
     el : '#app',
     data : {
       message : 'je suis yasmine fandi',
       experiences: [],
       formations: [],
       competences: [],
       open:false,
       experience: {
         id:0,
         cvv_id: window.laravel.idExperience,
         intitule:'',
         lieu:'',
         description:'',
         date_debut:'',
         date_fin:''

       },
       formation: {
         id:0,
         cv_id: window.laravel.idFormation,
         diplome:'',
         lieu:'',
         date_debut:'',
         date_fin:'',
         domaine:''

       },
       competence: {
         id:0,
         cv_iid: window.laravel.idCompetence,
         description:''

       }

     },
     methods : {
       getExperience: function() {
          axios.get(window.laravel.url+'/getExperience/'+window.laravel.idExperience)
         .then(response => {
         this.experiences = response.data;
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       },
       getFormation: function() {
          axios.get(window.laravel.url+'/getExperience/'+window.laravel.idFormation)
         .then(response => {
         this.formations = response.data;
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       },
       getCompetence: function() {
          axios.get(window.laravel.url+'/getExperience/'+window.laravel.idCompetence)
         .then(response => {
         this.competences = response.data;
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       },
       addExperience: function(){
         axios.post(window.laravel.url+'/addExperience' , this.experience)
         .then(response => {
           if(response.data.etat){
             this.open=false;
             this.experiences.unshift(this.experience);
             this.experience ={
                         id:0,
                         cvv_id: window.laravel.idExperience,
                         intitule:'',
                         lieu:'',
                         description:'',
                         date_debut:'',
                         date_fin:''
             };
           }
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       }
        addFormation: function(){
         axios.post(window.laravel.url+'/addFormation/' , this.formation)
         .then(response => {
           if(response.data.etat){
             this.open=false;
             this.formations.unshift(this.formation);
             this.formation ={
                id:0,
                cv_id: window.laravel.idFormation,
                diplome:'',
                lieu:'',
                date_debut:'',
                date_fin:'',
                domaine:''
             };
           }
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       },
        addCompetence: function(){
         axios.post(window.laravel.url+'/addCompetence/' , this.competence)
         .then(response => {
           if(response.data.etat){
             this.open=false;
             this.competences.unshift(this.competence);
             this.competence ={
                id:0,
                cvv_id: window.laravel.idCompetence,
                description:''
             };
           }
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       }
     },
     mounted: function(){
      this.getExperience();
       this.getFormation();
        this.getCompetence();

     }
     


    }); 

  </script>


   <!--   Optional JavaScript
     jQuery first, then Popper.js, then Bootstrap JS -->
     <script src="{{asset('assets/js/jquery.min.js')}}"></script>
     <script src="{{asset('assets/js/popper.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets/js/feather.min.js')}}"></script>
     <script src="{{asset('assets/js/bootstrap-select.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery.nstSlider.min.js')}}"></script>
     <script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('assets/js/visible.js')}}"></script>
     <script src="{{asset('assets/js/jquery.countTo.js')}}"></script>
     <script src="{{asset('assets/js/chart.js')}}"></script>
     <script src="{{asset('assets/js/plyr.js')}}"></script>
     <script src="{{asset('assets/js/tinymce.min.js')}}"></script>
     <script src="{{asset('assets/js/slick.min.js')}}"></script>
     <script src="{{asset('assets/js/jquery.ajaxchimp.min.js')}}"></script>
     <script src="{{asset('assets/js/custom.js')}}"></script>
     <script src="{{asset('assets/js/dashboard.js')}}"></script>
     <script src="{{asset('assets/js/datePicker.js')}}"></script>
     <script src="{{asset('assets/js/upload-input.js')}}"></script>
     <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC87gjXWLqrHuLKR0CTV5jNLdP4pEHMhmg"></script>   
      <script src="{{asset('assets/js/map.js')}}"></script> 
  </body><

 <!-- Mirrored from themerail.com/html/oficiona/job-listing.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 17 Nov 20191:29:44 GMT
 </html>
