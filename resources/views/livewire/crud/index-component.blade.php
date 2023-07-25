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
                       <h5 class="card-title" style="float: left";>Liste des utilisateurs</h5>
                

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
                             <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalForm">
                                <i class="bi bi-plus-circle"></i> Ajouter
                            </button>
                            
                                                             <!-- Modal ajout-->
                              <div class="modal fade" id="modalForm" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="exampleModalLabel">Créer un utilisateur</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        @livewire('crud.add-utilisateur-component')
                                    </div>
                                  </div>
                                </div>
                              </div> 
                              <br>


                       <table class="table table-bordered">
                           <thead>
                               <tr>
                                   <th>NomUser</th>
                                   <th>PrenomUser</th>
                                   <th>AdresseUser</th>
                                   <th>MdpUser</th>
                                   <th>PhoneUser</th>
                                   <th>PosteUser</th>
                                   <th>Actions</th>
                               </tr>
                           </thead>

                           <tbody>
                               @if ($utilisateurs->count()> 0)
                                   @foreach ($utilisateurs as $utilisateur )
                                       <tr>
                                           <td>{{ $utilisateur->nomUser }}</td>
                                           <td>{{ $utilisateur->prenomUser }}</td>
                                           <td>{{ $utilisateur->adresseUser }}</td>
                                           <td>{{ $utilisateur->mdpUser }}</td>
                                           <td>{{ $utilisateur->phoneUser }}</td>
                                           <td>{{ $utilisateur->posteUser }}</td>
                              
                                           <td>
                                               <a href="{{ route('editUtilisateur',['id'=>$utilisateur->id]) }}" class="btn btn-sm btn-secondary" style="padding: 1px 8px;"><i class="bi bi-pencil-square"></i></a>
                                               <a href="javascript:void(0)" wire:click="delete({{ $utilisateur->id }})" class="btn btn-sm btn-danger" style="padding: 1px 8px;"><i class="bi bi-trash"></i></a>
                                           </td>
                                       </tr>
                                   @endforeach
                                @else
                                <tr>
                                   <td colspan="5" style="text-align: center;">Pas d'utilisateur trouvé</td>
                                </tr>
                               @endif
                           </tbody>
                       </table>
                       {{ $utilisateurs->links() }}
                   </div>
               </div>
           </div>
       </div>
   </div>
   </section>  
</div>