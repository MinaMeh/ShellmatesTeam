
@extends ('layouts.master')
@section('content')

<div class="row">                                        
  <div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="font-weight-bold"> Liste des membres</h4>
        <div class="row purchace-popup">
          <div class="col-12">
            @include("errors.errors")
            @include('members.create')
            <span class="d-block d-md-flex align-items-center">
              <a class="btn ml-auto download-button d-none d-md-block" data-toggle="modal" data-target="#addMember" ><i class="mdi mdi-calendar-plus"></i> Ajouter un membre</a>
            </span>
          </div>
        </div>
        <div class="line"></div>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead >
              <tr>  
                <th class="text-center font-weight-bold"> Nom</th>
                <th class="text-center font-weight-bold"> Prénom</th>
                <th class="text-center font-weight-bold"> Départements</th>                
                <th class="text-center font-weight-bold"> E-mail</th>
                <th class="text-center font-weight-bold"> Téléphone</th>
                <th class="text-center font-weight-bold"> Etablissement</th>
                <th class="text-center font-weight-bold"> Année d'étude</th>
                <th class="text-center font-weight-bold"> Facebook</th>
                
              </tr>
            </thead>
            <tbody>
              @foreach ($members as $member)
              <tr>
                <td class="text-center">{{ $member->nom }} </td>
                <td class="text-center">{{ $member->prenom }} </td>
                <td class="text-center">
                  @if ($member->post) 
                  {{ $member->post}}
                  @else
                  @foreach ($member->departements as $departement) 
                  <span class="badge badge-info">{{$departement->designation}}</span>
                  @endforeach
                  @endif
                </td>

                <td class="text-center">{{ $member->email }} </td>
                <td class="text-center">{{ $member->phone }} </td>
                <td class="text-center">{{ $member->school }} </td>
                <td class="text-center">{{ $member->year }} </td>
                <td class="text-center">{{ $member->facebook }} </td>
               
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
