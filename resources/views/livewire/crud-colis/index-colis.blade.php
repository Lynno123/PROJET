@include('header')


<style>
    nav svg{
        height: 20px;  
    }
</style>
<section>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-15">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title" style="float: left";>Liste des colis</h5>
                
                       {{-- Recherche branche --}}
                    <form class="col-md-4">
                     <div class="input-group">
                       <span class="input-group-text"><i class="bi bi-search"></i></span>
                       <input type="text" class="form-control" placeholder="Rechercher..." wire:model="searchTerm">
                     </div>
                   </form>                   
                
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                           @if (session()->has('message'))
                           <div class="alert alert-success text-center">{{ session('message') }}</div>
                           @endif
                        </div>
                    </div>

                    
                         <!-- Button trigger modal -->
<button type="button" class="btn btn-outline-success" data-bs-toggle="modal" data-bs-target="#modalForm">
    <i class="bi bi-plus-lg"></i> Ajouter
</button>

                             <!-- Modal ajout-->
<div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h1 class="modal-title fs-5" id="exampleModalLabel">Créer colis</h1>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
        @livewire('crud-colis.add-colis')
    </div>
  </div>
</div>
</div> 
<br>

                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Code colis</th>
                                <th>Nom colis</th>
                                <th>Type colis</th>
                                <th>Date colis</th>
                                <th>Marque objet</th>
                                <th>Nombre colis</th>
                                <th>Nombre objet</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($coliss->count()> 0)
                                @foreach ($coliss as $colis )
                                    <tr>
                                        <td>{{ $colis->code_colis }}</td>
                                        <td>{{ $colis->nom_colis }}</td>
                                        <td>{{ $colis->type_colis }}</td>
                                        <td>{{ $colis->date_colis }}</td>
                                        <td>{{ $colis->marque_objet }}</td>
                                        <td>{{ $colis->nombre_colis }}</td>
                                        <td>{{ $colis->nombre_objet }}</td>
                           
                                        <td>
                                            <a href="{{ route('editColis',['id'=>$colis->id]) }}" class="btn btn-outline-secondary" style="padding: 1px 8px;"><i class="bi bi-pencil-square"></i></a>
                                            <a href="javascript:void(0)" wire:click="delete({{ $colis->id }})" class="btn btn-outline-danger" style="padding: 1px 8px;"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                             @else
                             <tr>
                                <td colspan="5" style="text-align: center;">Pas de courrier arrivé trouvé</td>
                             </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $coliss->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</section>  
