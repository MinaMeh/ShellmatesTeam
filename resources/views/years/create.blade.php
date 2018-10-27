@extends('layouts.master')
@section('content')
<br><br><br>
<div class="row">
	<div class="col-md-8 offset-md-2 grid-margin stretch-card">

		<div class="card">
			<div class="card-body">
				@include('errors.errors')
				<form class="forms-sample" method="post" action="/years/add">
					{{ csrf_field() }}
					<div class="form-group">
		              <label for="year" class="font-weight-bold"> Année univeritaire</label>
		              <input type="text" required class="form-control" name="year" id="year" >
		            </div>
		            <h4> Coordoonées du président(e) </h4> <hr>
		            <div class="form-group">
		              <label for="nom_p" class="font-weight-bold"> Nom</label>
		              <input type="text" required class="form-control" name="nom_p" id="nom_p">
		            </div>
		            <div class="form-group">
		              <label for="prenom_p" class="font-weight-bold"> Prénom</label>
		              <input type="text" required class="form-control" name="prenom_p" id="prenom_p">
		            </div>
		            <div class="form-group">
		              <label for="email_p" class="font-weight-bold"> email</label>
		              <input type="email" required class="form-control" name="email_p" id="email_p">
		            </div>
		            <div class="form-group">
		              <label for="school_p" class="font-weight-bold"> Etablissement</label>
		              <input type="text" required class="form-control" name="school_p" id="school_p">
		            </div>
		            <div class="form-group">
		              <label for="year_p" class="font-weight-bold"> Année d'étude</label>
		              <input type="text" required class="form-control" name="year_p" id="year_p">
		            </div>
		            <div class="form-group">
		              <label for="phone_p" class="font-weight-bold"> Numéro de téléphone</label>
		              <input type="number" required class="form-control" name="phone_p" id="phone_p">
		            </div>
		            <div class="form-group">
		              <label for="facebook_p" class="font-weight-bold"> Lien facebook</label>
		              <input type="text" required class="form-control" name="facebook_p" id="facebook_p">
		            </div>
		            <h4> Coordoonées du vice-président(e) </h4> <hr>
		            	<div class="form-group">
			              <label for="nom_vp" class="font-weight-bold"> Nom</label>
			              <input type="text" required class="form-control" name="nom_vp" id="nom_vp">
			            </div>
			            <div class="form-group">
			              <label for="prenom_vp" class="font-weight-bold"> Prénom</label>
			              <input type="text" required class="form-control" name="prenom_vp" id="prenom_vp">
			            </div>
			            <div class="form-group">
			              <label for="email_vp" class="font-weight-bold"> email</label>
			              <input type="email" required class="form-control" name="email_vp" id="email_vp">
			            </div>
			            <div class="form-group">
			              <label for="school_vp" class="font-weight-bold"> Etablissement</label>
			              <input type="text" required class="form-control" name="school_vp" id="school_vp">
			            </div>
			            <div class="form-group">
			              <label for="year_vp" class="font-weight-bold"> Année d'étude</label>
			              <input type="text" required class="form-control" name="year_vp" id="year_vp">
			            </div>
			            <div class="form-group">
			              <label for="phone_vp" class="font-weight-bold"> Numéro de téléphone</label>
			              <input type="number" required class="form-control" name="phone_vp" id="phone_vp">
			            </div>
			            <div class="form-group">
			              <label for="facebook_vp" class="font-weight-bold"> Lien facebook</label>
			              <input type="text" required class="form-control" name="facebook_vp" id="facebook_vp">
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