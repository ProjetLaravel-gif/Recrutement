 
 @extends('Cv.partials.master')
 @section('yasmine')

          <h4><i data-feather="plus-circle"></i>Ajouter CV</h4>
                <div id="name" class="form-group row">
                  <label class="col-md-3 col-form-label">Titre</label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="titre" placeholder="titre">
                  </div>
                </div>
                 <div id="full-name" class="form-group row">
                  <label class="col-md-3 col-form-label">Divers
                  </label>
                  <div class="col-md-9">
                    <input type="text" class="form-control" name="divers" placeholder="Divers">
                  </div>
                </div>



                <!--                       personnelle details                -->

                <div id="details" class="row">
                  <label class="col-md-3 col-form-label">Personal Details</label>
                  <div class="col-md-9">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="nom">
                        </div>
                      </div>
                      <!-- <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Father's Name">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Mother's Name">
                        </div>
                      </div> -->
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="date" class="form-control">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="Numero de telephone">
                        </div>
                      </div>
                     <div class="col-md-6">
                       <div class="form-group">
                         <input type="text" class="form-control" placeholder="civilite">
                       </div>
                     </div>
                      <div class="col-md-12">
                        <div class="form-group">
                          <input type="text" class="form-control" placeholder="adresse">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!--                           finnnnnnnnnnnnnn -->

                <!--                        socialll -->
                <div id="profile" class="row">
                  <label class="col-md-3 col-form-label">Social Profile</label>
                  <div class="col-md-9">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <div class="input-group-text dropdown-label">
                            <select class="form-control">
                              <option>Select</option>
                              <option>Facebook</option>
                              <option>Twitter</option>
                              <option>Linkedin</option>
                              <option>Instagram</option>
                            </select><i class="fa fa-caret-down"></i>
                          </div>
                        </div>
                        <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Input Profile Link">
                      </div>
                    </div>
                    <a href="#" class="add-new-field">+ Add Social</a>
                  </div>
                </div>

           <!--                           finnnnnnnnnnnnnn -->
              <div id="about" class="row">
                <label class="col-md-3 col-form-label">About You</label>
                <div class="col-md-9">
                  <textarea class="tinymce-editor-1" placeholder="Description text here"></textarea>
                </div>
              </div>



               
               <!--  <div id="cv" class="row form-group">
                  <label class="col-md-3 col-form-label">telecharger CV</label>
                  <div class="col-md-9">
                    <div class="add-cv">
                      <input type="file">CV File<i data-feather="upload-cloud"></i>
                    </div>
                  </div>
                </div> -->
            <!--     <div id="cover" class="row">
                   <label class="col-md-3 col-form-label">Cover Letter</label>
                  <div class="col-md-9">
                    <textarea class="tinymce-editor-1" placeholder="Description text here"></textarea>
                  </div> 
                </div> -->
                
        <!-- 
                <div class="row">
                  <div class="col-md-9 offset-md-3">
                    <div class="form-group mt-0 terms">
                      <input class="custom-radio" type="checkbox" id="radio-4" name="termsandcondition">
                      <label for="radio-4">
                        <span class="dot"></span> You accepts our <a href="#">Terms and Conditions</a> and <a href="#">Privacy Policy</a>
                      </label>
                    </div>
                  </div>
                </div> -->
                <div class="form-group row">
                  <label class="col-md-3 col-form-label"></label>
                  <div class="col-md-9">
                    <button class="button">
                      <a href="{{ url('') }}" ></a>
                                  Annuler
                    </button>
                    <button class="button">
                         <a href="{{ url('formations/formation') }}" ></a>
                    Suivant
                    </button>
                  </div>
                </div>
              
          @endsection