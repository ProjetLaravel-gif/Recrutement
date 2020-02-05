 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
  <script src="{{asset('assets/js/vue.js')}}"></script>
  <script >
    window.laravel = {!! json_encode([
      'csrfToken' => csrf_token(),
      'idFormation' => $id,
      
      
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
          axios.get(window.laravel.url+'/getFormation/'+window.laravel.idFormation)
         .then(response => {
         this.formations = response.data;
         } )
         .catch(error => {
           console.log('errors :' , error );
         })
       },
       getCompetence: function() {
          axios.get(window.laravel.url+'/getCompetence/'+window.laravel.idCompetence)
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
             this.experiences.id= response.data.id;
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

   public function addExperience(Request $request){
          $experience = new Experience();                 
          $experience->intitule = $request->intitule;
          $experience->lieu = $request->lieu;
          $experience->description = $request->description;
          $experience->date_debut = $request->date_debut;
          $experience->date_fin = $request->date_fin;
          $experiences->cvv_id = $request->cvv_id;
          $experience->save();
          return Response()->json(['etat' => true, 'id' => $experience->id]);
       }
 public function addFormation(Request $request){
         $formation = new Formation();
         $formation->diplome = $request->diplome;
         $formation->lieu = $request->lieu;
         $formation->date_debut = $request->date_debut;
         $formation->date_fin = $request->date_fin;
         $formation->domaine = $request->domaine;
         $formation->cv_id = $request->cv_id;
         $formation->save();
         return Response()->json(['etat' => true, 'id' => $formation->id]);
      }
         public function addCompetence(Request $request){
         $competence = new Competence();                 
         $competence->description = $request->description;
         $competence->cv_iid = $request->cv_iid;
         $competence->save();
          return Response()->json(['etat' => true, 'id' => $competence->id]);
       }

             }
 public function updateFormation(Request $request){
         $formation =  Formation::find($request->id);
         $formation->diplome = $request->diplome;
         $formation->lieu = $request->lieu;
         $formation->date_debut = $request->date_debut;
         $formation->date_fin = $request->date_fin;
         $formation->domaine = $request->domaine;
         $formation->cv_id = $request->cv_id;
         $formation->save();
         return Response()->json(['etat' => true]);
      }

       public function deleteFormation($id){
              $formation= Formation::find($id);
              $formation->delete();
         return Response()->json(['etat' => true]);
      }

      // Salam werili fichier w page w navi
      //fichier kismo exp.blade.php
      w contoller cv
      w nav rah mahlul



      <form action="/ajout_formation" method="post">
                      @csrf
                      <div class="basic-info-input" id='ajout_formation'  style='display:none'>
                        <input type="hidden" name="cv_id" value="{{$cv_id}}">
                          <input type="hidden" name="id_cv_formation" value="{{$cv->id}}">
                                     
               
                
                    

                  <div id="full-name" class="form-group row" >
                    <label class="col-md-3 col-form-label">Diplome</label>
                    <div class="col-md-9">
                      <input type="text" class="form-control" name='diplome_formation'  placeholder=" Diplome">
                    </div>
                  </div>
                  
                  <div id="full-name" class="form-group row">
                    <label class="col-md-3 col-form-label">lieux</label>
                    <div class="col-md-9">
                      <input type="text"  name='lieu_formation'   class="form-control" placeholder="lieux">
                    </div>
                  </div>
                  
                  <div id="full-name" class="form-group row">
                    <label class="col-md-3 col-form-label">Date debut</label>
                    <div class="col-md-9">
                      <input type="Date" name="date_debut_formation"  class="form-control" >
                    </div>
                  </div>
                  
                  <div id="full-name" class="form-group row">
                    <label class="col-md-3 col-form-label">Date fin</label>
                    <div class="col-md-9">
                      <input type="Date"  name="date_fin_formation" class="form-control" >
                    </div>
                  </div>
                  
                  <div id="full-name" class="form-group row">
                    <label class="col-md-3 col-form-label">Domaine</label>
                    <div class="col-md-9">
                      <input type="text"  name="domaine" class="form-control" placeholder="Domaine">
                    </div>
                  </div>
                  
                
                  
                  <div class="form-group row">
                    <label class="col-md-3 col-form-label"></label>
                    <div class="col-md-9">
                      <button type="submit">Ajouter Formation</button>
                      <button class="button" onclick="$('#ajout_formation').hide();">Annuler</button>
                    </div>
                  </div>
</form>
                </div>