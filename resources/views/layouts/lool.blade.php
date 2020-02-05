
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
                    <li><i class="fas fa-home"></i><a href="{{ url ('candidatdashboard') }}">
Tableau de bord</a></li>
                    <li><i class="fas fa-user"></i><a href="{{ route('profil') }}"> 
Editer le profil</a></li>
                    <li><i class="fas fa-file-alt"></i><a href="{{ route('cvs') }}">CV</a></li>
     
                    <li><i class="fas fa-heart"></i><a href="dashboard-bookmark.html">
Favoris</a></li>
                    <li><i class="fas fa-check-square"></i><a href="dashboard-applied.html">Emploi appliqué</a></li>
                    <li><i class="fas fa-comment"></i><a href="dashboard-message.html">Message</a></li>
  
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