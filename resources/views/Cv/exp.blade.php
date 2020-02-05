@extends('layouts.app')
@section('content')


  
  <form action="{{url ('cvs/'.$cvs->id)}}" method="POST"><input type="hidden" name="_method" value="PUT">
    {{ csrf_field() }}
    <input type="hidden" name="candidat_id" value="{{$cvs->candidat_id}}">

    <div id="app" >
      <div v-for="formation in formations">
      <h2>DIPLOME: @{{ formations.diplome }}</h2>
      <h2>lieu: @{{ formations.lieu }}</h2>
      <h2>date_d: @{{ formations.date_debut }}</h2>
      <h2>cv_id @{{ formations.cv_id }}</h2>
      <h2>id: @{{ formation.id }}</h2>
      <h2>@{{ formation.test }}</h2>
  <div class="form-group">
    <label for="exampleInputEmail1">Diplome</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="diplome" value="@{{formation.diplome}}">
    <small class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Lieu</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="lieu" value="">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Date-Debut</label>
    <input type="email" class="form-control"  aria-describedby="emailHelp" name="date_debut" value="">
    <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
 <div class="form-group">
   <label for="exampleInputEmail1">Date-Fin</label>
   <input type="email" class="form-control"  aria-describedby="emailHelp" name="date_fin" value="" >
   <small  class="form-text text-muted">We'll never share your email with anyone else.</small>
 </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" >
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>

</div>
  </div>
</form>


@section('js')
<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
 <script src="{{asset('assets/js/vue.js')}}"></script>
 <script >
  
   window.laravel = {!! json_encode([
     'csrfToken' => csrf_token(),
     'idFormation' => $cvs->id,
      'url' => url('/')
    ])!!};
 </script>
 <script >
  
   var app = new Vue({
    el : '#app',
    data : {
      message : 'je suis yasmine fandi',
     
      formations: [], 
      open:false,
    
      formation: {
     id:0,
     cv_id: window.laravel.idFormation,
     diplome:'',
     lieu:'',
     date_debut:'',
     date_fin:'',
     domaine:'',
     test : 'Heloo from test'

   },
   edit:false
   

    },
    methods : { 
  getFormation: function() {  
      axios.get(window.laravel.url+'/getformations/'+window.laravel.idExperience) 
     .then(response => {
      alert('Helo from get');
      console.log('Deubuggin');
     this.formations = response.data;
     } )
     .catch(error => {
       console.log('errors :' , error );
     })
   }, 
 // ana banatli vue js les fcts ta3o tbadlo parce que n2olo had fct marahch y executeha brh 3amlto boutton nrml ki na3fs 3lih yakhrjli fomulaire iya 3mlt @click w maditlo variable li kunt m declaryitha f vue js iya makanch yatmachali
 // Oui normalment had les fct haka yekhdmo khass ta3teba par xemple button ki tecklick 3ada bach tmecha oui chuf 
   
    created: function(){
     this.getFormation();
      

    }
    


   } 

 }); 

 </script>
 @endsection
</body>
</html>
 @endsection