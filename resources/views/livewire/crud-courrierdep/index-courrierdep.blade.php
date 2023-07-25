@include('header')


<div>
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
                        <h5 class="card-title" style="float: left";>Liste des courriers departs</h5>
    

                        {{-- Recherche --}}
                        <form class="col-md-4">
                         <div class="input-group">
                           <span class="input-group-text"><i class="bi bi-search"></i></span>
                           <input type="text" class="form-control" placeholder="Rechercher..." wire:model="searchTerm">
                         </div>
                       </form>                   
                         
                        {{-- Tableau de courrier depart --}}
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
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Créer un courrier départ</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @livewire('crud-courrierdep.add-courrierdep')
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <br>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>NumeroCr</th>
                                    <th>Date depart</th>
                                    <th>Destinataire</th>
                                    <th>Objet</th>
                                    <th>Observation</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
 
                            <tbody>
                                @if ($courrierdeps->count()> 0)
                                    @foreach ($courrierdeps as $courrierdep )
                                        <tr>
                                            <td>{{ $courrierdep->numCr }}</td>
                                            <td>{{ $courrierdep->dateDepart }}</td>
                                            <td>{{ $courrierdep->destinataire }}</td>
                                            <td>{{ $courrierdep->objet }}</td>
                                            <td>{{ $courrierdep->observation }}</td>
                               
                                            <td>
                                                <a href="{{ route('editCourrierdep',['id'=>$courrierdep->id]) }}" class="btn btn-outline-secondary" style="padding: 1px 8px;"><i class="bi bi-pencil-square"></i></a>
                                                <a href="javascript:void(0)" wire:click="delete({{ $courrierdep->id }})" class="btn btn-outline-danger" style="padding: 1px 8px;"><i class="bi bi-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                 @else
                                 <tr>
                                    <td colspan="5" style="text-align: center;">Pas de courrier depart trouvé</td>
                                 </tr>
                                @endif
                            </tbody>
                        </table>
                        {{ $courrierdeps->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>  
 </div>