
@extends ('layouts.master')
@section('content')

<div class="row">                                        
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="font-weight-bold"> Liste des saisons</h4>
        <div class="row purchace-popup">
          <div class="col-12">
            <span class="d-block d-md-flex align-items-center">
              <a class="btn ml-auto download-button d-none d-md-block" href="/years/create" ><i class="mdi mdi-calendar-plus"></i> Ajouter une nouvelle saison</a>
            </span>
          </div>
        </div>
        <div class="line"></div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead >
              <tr>  
                <th class="text-center font-weight-bold"> Titre</th>
                <th class="text-center font-weight-bold"> Formateur</th>
               
                
              </tr>
            </thead>
            <tbody>
              @foreach ($formations as $formation)
              <tr>
                
                <td class="text-center"> {{ $formation->titre }}</td>
                <td class="text-center">
                  @foreach($formation->formateur as $formateur)
                    <li> {{ $formateur->nom.' '.$formateur->prenom }}</li>
                  @endforeach
                </td>

                
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
