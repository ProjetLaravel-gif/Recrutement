 @extends('Cv.partials.master')
 @section('yasmine')
 <h4><i data-feather="plus-circle"></i>Competence</h4>
  
  <div class="row">
    <label class="col-md-3 col-form-label">Description</label>
    <div class="col-md-9">
      <div class="form-group">
        <textarea  placeholder="Description text here"></textarea>
      </div>


    

      <a href="#" class="add-new-field">+ Ajouter Competence</a>
    </div>
  </div>

  <div class="form-group row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                      <button class="button">Precedent</button>
                      <button class="button">Suivant</button>
                    </div>
                  </div>
   @endsection