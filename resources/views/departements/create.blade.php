<div class="modal fade" id="addDepartement" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ajouter un département</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
        </div>
        <div class="modal-body">
	        <form id="departement_add" method="post" action="/departements/add">
	        	{{csrf_field()}}
	        		<div class="form-group">
		              <label for="designation" class="font-weight-bold"> Designation</label>
		              <input type="text" required class="form-control" name="designation" id="designation">
		            </div>
		            <div class="form-group">
		              <label for="role" class="font-weight-bold"> Role</label>
		              <input type="text" required class="form-control" name="role" id="role">
		            </div>
		            <h5>Informations sur le chef du département</h5> <hr>
		            <div class="form-group">
		              <label for="nom" class="font-weight-bold"> Nom</label>
		              <input type="text" required class="form-control" name="nom" id="nom">
		            </div>
		            <div class="form-group">
		              <label for="prenom" class="font-weight-bold"> Prénom</label>
		              <input type="text" required class="form-control" name="prenom" id="prenom">
		            </div>
		        
		            <div class="form-group">
		              <label for="email" class="font-weight-bold"> email</label>
		              <input type="email" required class="form-control" name="email" id="email">
		            </div>
		            <div class="form-group">
		              <label for="school_p" class="font-weight-bold"> Etablissement</label>
		              <input type="text" required class="form-control" name="school" id="school">
		            </div>
		            <div class="form-group">
		              <label for="year" class="font-weight-bold"> Année d'étude</label>
		              <input type="text" required class="form-control" name="year" id="year">
		            </div>
		            <div class="form-group">
		              <label for="phone_p" class="font-weight-bold"> Numéro de téléphone</label>
		              <input type="number" required class="form-control" name="phone" id="phone">
		            </div>
		            <div class="form-group">
		              <label for="facebook_p" class="font-weight-bold"> Lien facebook</label>
		              <input type="text" required class="form-control" name="facebook" id="facebook">
		            </div>        	
	        </form>
        </div>
        <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="mdi mdi-close"></span> Annuler</button>
	        <button type="button" onclick="$('#departement_add').submit()" class="btn btn-success"><span class="mdi mdi-plus"></span> Ajouter</button>
        </div>
    </div>
  </div>
</div>
	