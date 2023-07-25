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
                    <h5 class="card-title" style="float: left";>Liste des administrateurs</h5>
                
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

            
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom</th>
                                <th>Email</th>
                                <th>Mot de passe</th>
                                <th>Actions</th>
                            </tr>
                        </thead>

                        <tbody>
                            @if ($users->count()> 0)
                                @foreach ($users as $user )
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->password }}</td>
                                
                           
                                        <td>
                                            <a href="{{ route('editUser',['id'=>$user->id]) }}" class="btn btn-outline-secondary" style="padding: 1px 8px;"><i class="bi bi-pencil-square"></i></a>
                                            <a href="javascript:void(0)" wire:click="delete({{ $user->id }})" class="btn btn-outline-danger" style="padding: 1px 8px;"><i class="bi bi-trash"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                             @else
                             <tr>
                                <td colspan="5" style="text-align: center;">Pas d'administrateur trouvé</td>
                             </tr>
                            @endif
                        </tbody>
                    </table>
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
</section>  
