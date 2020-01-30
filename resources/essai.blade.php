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

       addFormation: function(){
         axios.post(window.laravel.url+'/addFormation' , this.formation)
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
         axios.post(window.laravel.url+'/addCompetence' , this.competence)
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

       this.getFormation();
        this.getCompetence();

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
        <script >
 window.Laravel={!! json_encode([
  'csrftoken'   =>csrf_token(),
  'idExperience'=>$id,
  'url'    =>url('/')
  ])!!};
</script>