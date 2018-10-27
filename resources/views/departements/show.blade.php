
@extends ('layouts.master')
@section('content')

<div class="row">                                        
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="font-weight-bold"> Liste des départements</h4>
        <div class="row purchace-popup">
          <div class="col-12">
            @include("errors.errors")
            @include('departements.create')
            <span class="d-block d-md-flex align-items-center">
              <a class="btn ml-auto download-button d-none d-md-block" data-toggle="modal" data-target="#addDepartement" ><i class="mdi mdi-calendar-plus"></i> Ajouter un Département</a>
            </span>
          </div>
        </div>
        <div class="line"></div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead >
              <tr>  
                <th class="text-center font-weight-bold"> Designation</th>
                <th class="text-center font-weight-bold"> Chef</th>
                <th class="text-center font-weight-bold"> Role</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($departements as $departement)
              <tr>
                <td class="text-center">{{ $departement->designation }} </td>
                <td class="text-center"> {{ $departement->chef()->nom.' '.$departement->chef()->prenom }} </td>
                <td class="text-center">{{ $departement->role }} </td>
                
               
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>     
</div>
@endsection
