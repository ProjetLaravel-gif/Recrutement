<@extends('layouts.master')
@section('content')



<!-- Breadcrumb -->
<div class="alice-bg padding-top-70 padding-bottom-70">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="breadcrumb-area">
          <h1>Resume</h1>
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active" aria-current="page">Resume</li>
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
   <form action="{{ url('cvs') }}" method="post">
                    {{ csrf_field() }}
                    <div id='sectionAimprimer'>
  <div class="container no-gliters">
    <div class="row no-gliters">
      <div class="col">
        <div class="dashboard-container">
          <div class="dashboard-content-wrapper">

            
            <div class="download-resume dashboard-section">
              <a href="#" class="button print" onClick="imprimer('sectionAimprimer')"><i data-feather="printer"></i>imprimer cv</a>
              <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
            </div>
            <div class="skill-and-profile dashboard-section">
              <div class="skill">
                <label>Skills:</label>
                <a href="#">Design</a>
                <a href="#">Illustration</a>
                <a href="#">iOS</a>
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
              </div>
            </div>
            <div class="about-details details-section dashboard-section">
              <h4><i data-feather="align-left"></i>About Me</h4>
              <p>Combined with a handful of model sentence structures, to generate lorem Ipsum which  It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including.</p>
              <p>Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable </p>
              <div class="information-and-contact">
                <div class="information">
                  <h4>Information</h4>
                  <ul>
                    <li><span>Category:</span> Design & Creative</li>
                    <li><span>Location:</span> Los Angeles</li>
                    <li><span>Status:</span> Full-time</li>
                    <li><span>Experience:</span> 3 year(s)</li>
                    <li><span>Salary:</span> $32k - $36k</li>
                    <li><span>Gender:</span> Male</li>
                    <li><span>Age:</span> 24 Year(s)</li>
                    <li><span>Qualification:</span> Gradute</li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="edication-background details-section dashboard-section">
              <h4><i data-feather="book"></i>Formation</h4>
              @foreach($cvs->formations as $formation)
              <div class="education-label">
                <span class="study-year">{{ $formation->date_debut }}-{{ $formation->date_fin }}</span>
                <h5>{{ $formation->diplome }}<span>{{ $formation->lieu }} </span></h5>
               <h5>{{ $formation->domaine }}<!-- <span>@ {{ $formation->domaine }} </span> --></h5>
              </div>
              @endforeach
            </div>  
             <div class="experience dashboard-section details-section">
                  <h4><i data-feather="briefcase"></i>Experience</h4>
                  @foreach($cvs->experiences as $experience)
                  <div class="experience-section">
                    <span class="service-year">{{ $experience->date_debut }}-{{ $experience->date_fin }}</span>
                    <h5>{{ $experience->intitule }}<span>{{ $experience->lieu }}</span></h5>
                    <p>{{ $experience->description }}</p>
                  </div>
                  @endforeach
                </div>
                
                <div class="special-qualification dashboard-section details-section">
                  <h4><i data-feather="gift"></i>Competence</h4>
                  @foreach($cvs->competences as $competence)
                  <p>{{ $competence->description }}</p>
                   @endforeach
                </div>
          <!--   <div class="professonal-skill dashboard-section details-section">
              <h4><i data-feather="feather"></i>Professional Skill</h4>
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
            </div> -->
       
            <!-- <div class="portfolio dashboard-section details-section">
              <h4><i data-feather="gift"></i>Portfolio</h4>
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
            </div> -->
            <div class="personal-information dashboard-section last-child details-section">
              <h4><i data-feather="user-plus"></i>Information Personnel </h4>
              <ul>
                <li><span>Full Name:</span> {{Auth::guard('candidat')->user()->nom  }}&#160;{{Auth::guard('candidat')->user()->prenom}}</li>
                <li><span>Date De Naissance:</span> {{Auth::guard('candidat')->user()->datenaiss}} </li>
                <li><span>Numero De Telephone:</span> {{Auth::guard('candidat')->user()->numtel}} </li>
                <li><span>Email:</span>{{Auth::guard('candidat')->user()->email}} </li>
                <li><span>Linkedlin:</span> {{Auth::guard('candidat')->user()->linkedlin}}</li>
              </ul>
            </div>
          </div>
          <div class="dashboard-sidebar">
            <div class="user-info">
              <div class="thumb">
                <img src="dashboard/images/user-1.jpg" class="img-fluid" alt="">
              </div>
              <div class="user-body">
                <h5>{{Auth::guard('candidat')->user()->nom}}</h5>
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
                <li><i class="fas fa-home"></i><a href="dashboard.html">Dashboard</a></li>
                <li><i class="fas fa-user"></i><a href="">Edit Profile</a></li>
                <li class="active"><i class="fas fa-file-alt"></i><a href="resume.html">Resume</a></li>
                <li><i class="fas fa-edit"></i><a href="edit-resume.html">Edit Resume</a></li>
                <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">Bookmarked</a></li>
                <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Applied Job</a></li>
                <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
                <li><i class="fas fa-calculator"></i><a href="dashboard-pricing.html">Pricing Plans</a></li>
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
            <h2>For Find Your Dream Job or Candidate</h2>
            <p>Add resume or post a job. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec.</p>
          </div>
          <div class="call-to-action-button">
            <a href="add-resume.html" class="button">Add Resume</a>
            <span>Or</span>
            <a href="post-job.html" class="button">Post A Job</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Call to Action End -->
</form>

@endsection