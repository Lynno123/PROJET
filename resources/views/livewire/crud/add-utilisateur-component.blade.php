            <div>
                                <div class="card-body">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success text-center">{{ session('message') }}</div>
                                    @endif
                                    <form wire:submit.prevent="storeUtilisateur">
                                        <div class="from-group">
                                            <label for="nomUser">Nom utilisateur</label>
                                            <input type="text" class="form-control" wire:model="nomUser"/>
                                            {{-- Pour validation --}}
                                            @error('nomUser')
                                                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                            @enderror
                                        </div>
            
                                        <div class="from-group">
                                            <label for="prenomUser">Prenoms utilisateur</label>
                                            <input type="text" class="form-control" wire:model="prenomUser"/>
                                            {{-- Pour validation --}}
                                            @error('prenomUser')
                                                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                            @enderror
                                        </div>
            
                                        <div class="from-group">
                                                <label for="adresseUser">Adresse</label>
                                                <input type="text" class="form-control" wire:model="adresseUser"/>
                                                {{-- Pour validation --}}
                                                @error('adresseUser')
                                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                                @enderror
                                        </div>
                                        
                                        <div class="from-group">
                                            <label for="mdpUser">Mot de passe</label>
                                            <input type="password" class="form-control" wire:model="mdpUser"/>
                                            {{-- Pour validation --}}
                                            @error('mdpUser')
                                                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                            @enderror
                                        </div>

                                        <div class="from-group">
                                            <label for="phoneUser">Numero telephone</label>
                                            <input type="number" class="form-control" wire:model="phoneUser"/>
                                            {{-- Pour validation --}}
                                            @error('phoneUser')
                                                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                            @enderror
                                        </div>
            
                                        <div class="from-group">
                                            <label for="posteUser">Poste</label>
                                            <input type="text" class="form-control" wire:model="posteUser"/>
                                            {{-- Pour validation --}}
                                            @error('posteUser')
                                                <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                            @enderror
                                        </div>
                                      
                                        <br> 
                                        <div class="from-group text-center">
                                            <button type="submit" class="btn btn-success btn-sm w-50">Ajouter</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
        </div>
    



