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