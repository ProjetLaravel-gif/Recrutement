
@extends('Cv.partials.master')
@section('yasmine')
<h4><i data-feather="plus-circle"></i>Formation</h4>



<div id="name" class="form-group row">
  <label class="col-md-3 col-form-label">Diplome</label>
  <div class="col-md-9">
    <input type="text" class="form-control" placeholder="Diplome">
  </div>
</div>

<div id="name" class="form-group row">
  <label class="col-md-3 col-form-label">lieux</label>
  <div class="col-md-9">
    <input type="text" class="form-control" placeholder="lieux">
  </div>
</div>

<div id="name" class="form-group row">
  <label class="col-md-3 col-form-label">Date debut</label>
  <div class="col-md-9">
    <input type="date" class="form-control">
  </div>
</div>

<div id="name" class="form-group row">
  <label class="col-md-3 col-form-label">Date fin</label>
  <div class="col-md-9">
    <input type="date" class="form-control">
  </div>
</div>

<div class="row">
  <label class="col-md-3 col-form-label">Domaine</label>
  <div class="col-md-9">
    <div class="form-group">
      <input type="text" class="form-control" placeholder="Domaine">
    </div>


  

    <a href="#" class="add-new-field">+ Ajouter Formation</a>
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