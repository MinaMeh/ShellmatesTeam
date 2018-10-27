
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
                <th class="text-center font-weight-bold"> Année</th>
                <th class="text-center font-weight-bold"> Président(e)</th>
                <th class="text-center font-weight-bold"> Vice président(e)</th>
                <th class="text-center font-weight-bold"> Nombre de membres</th>
                <th class="text-center font-weight-bold"> Nombre de formation</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($years as $year)
              <tr>
                <td class="text-center">
                  <a href="/plans/modifier/{{$year->id}}"> {{$year->scholar_year}}</a> 
                   @if ($year->actuel) 
                    <span class="badge badge-success">En cours</span>
                  @else
                    <span class="badge badge-danger">Archivée</span>
                  @endif  
                </td>
                <td class="text-center"> {{ $year->president()->nom.' '.$year->president()->prenom }}</td>
                <td class="text-center"> {{ $year->vice()->nom.' '.$year->vice()->prenom }}</td>

                <td class="text-center"> {{ $year->nbr_membres() }}</td>
                                <td class="text-center"> 0</td>

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
