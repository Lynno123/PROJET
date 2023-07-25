<div>

    <div class="card-body">
        @if (session()->has('message'))
            <div class="alert alert-success text-center">{{ session('message') }}</div>
        @endif
        <form wire:submit.prevent="storeColis">
            <div class="from-group">
                <label for="code_colis">Code colis</label>
                <input type="text" class="form-control" wire:model="code_colis"/>
                {{-- Pour validation --}}
                @error('code_colis')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="from-group">
                    <label for="nom_colis">Nom colis</label>
                    <input type="text" class="form-control" wire:model="nom_colis"/>
                    {{-- Pour validation --}}
                    @error('nom_colis')
                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                    @enderror
            </div>
            
            <div class="from-group">
                <label for="type_colis">Type colis</label>
                <input type="text" class="form-control" wire:model="type_colis"/>
                {{-- Pour validation --}}
                @error('type_colis')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="from-group">
                <label for="date_colis">Date colis</label>
                <input type="date" class="form-control" wire:model="date_colis"/>
                {{-- Pour validation --}}
                @error('date_colis')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="from-group">
                <label for="marque_objet">Marque objet</label>
                <input type="text" class="form-control" wire:model="marque_objet"/>
                {{-- Pour validation --}}
                @error('marque_objet')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="from-group">
                <label for="nombre_colis">Nombre colis</label>
                <input type="number" class="form-control" wire:model="nombre_colis"/>
                {{-- Pour validation --}}
                @error('nombre_colis')
                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                @enderror
            </div>

            <div class="from-group">
                <label for="nombre_objet">Nombre objet</label>
                <input type="number" class="form-control" wire:model="nombre_objet"/>
                {{-- Pour validation --}}
                @error('nombre_objet')
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




