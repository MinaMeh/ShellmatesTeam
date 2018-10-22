@extends('layouts.master')
@section('content')
<br><br><br>
<div class="row">
	<div class="col-md-8 offset-md-2 grid-margin stretch-card">

		<div class="card">
			<div class="card-body">
				<h3 class="card-title"> Veuiller saisir les informations suivantes</h3>
				<form class="forms-sample" method="post" action="/years/add">
					{{ csrf_field() }}
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
		            <div class="col-md-6 offset-md-7">
			             <button name="submit" type="submit" class="btn btn-success mr-2" id="ajoutYear"><i class="mdi mdi-calendar-plus"></i>Ajouter</button>
	            		<button class="btn btn-light"><i class="mdi mdi-calendar-remove"></i><a href="/plans"> Annuler</a></button>
            		</div> 
				</form>
			</div>
			
		</div> 
	</div>
</div>
@endsection