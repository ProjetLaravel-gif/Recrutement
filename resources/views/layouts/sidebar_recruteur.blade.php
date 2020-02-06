
 <div class="dashboard-sidebar">
                <div class="company-info">
                  <a href="#" class="account-thumb">
                        <img src="/images/logo/{{ Auth::guard('recruteur')->user()->logo }}" class="img-fluid" alt="">
                      </a>
                  <div class="company-body">
                    <h5>{{ Auth::guard('recruteur')->user()->nom }}</h5>
                    <!-- <span>@username</span> -->
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
                    <li><i class="fas fa-user"></i><a href="{{route('profil1')}}">modifier profil</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="{{url('offres')}}">offres en attentes</a></li>
                    <li><i class="fas fa-briefcase"></i><a href="{{route('jobs')}}"> offres en publiées</a></li>
                    <li class="active"><i class="fas fa-users"></i><a href="{{url('postuler')}}">gerer candidats</a></li>
                    <li><i class="fas fa-plus-square"></i><a href="{{ url('offres/createo/$offres->recruteur_id')}}">publier offre</a></li>
                    <li><i class="fas fa-comment"></i><a href="{{url('message')}}">Messages</a></li>
                    <li><i class="fas fa-comment"></i><a href="{{url('simple')}}">nb offres par mois</a></li>
                    <li><i class="fas fa-comment"></i><a href="{{url('camembert')}}">nb offres par wilaya</a></li>
                  </ul>
                  <ul class="delete">
                    <li><i class="fas fa-power-off"></i><a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Se Déconnecter
                                    </a></li>
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
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
              