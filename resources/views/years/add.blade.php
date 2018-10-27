<div class="modal fade" id="addYear" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLabel">Ajouter une saison</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
        </div>
        <div class="modal-body">
	        <form id="year_add" method="post" action="/years/add">
	        	{{csrf_field()}}
	        	<div class="form-group">
		              <label for="year" class="font-weight-bold"> Année univeritaire</label>
		              <input type="text" required class="form-control" name="year" id="year" >
		            </div>
		            <div class="form-group">
		              <label for="president" class="font-weight-bold"> Président(e)</label>
		              <input type="text" required class="form-control" name="president" id="president">
		            </div>
		            <div class="form-group">
		              <label for="vice" class="font-weight-bold"> Vice président(e)</label>
		              <input type="text" required class="form-control" name="vice" id="vice">
		            </div>
		            	        	
	        </form>
        </div>
        <div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal"><span class="mdi mdi-close"></span> Annuler</button>
	        <button type="button" onclick="$('#year_add').submit()" class="btn btn-success"><span class="mdi mdi-plus"></span> Ajouter</button>
        </div>
    </div>
  </div>
</div>
