
<div>
        <div class="card-body">
            @if (session()->has('message'))
                <div class="alert alert-success text-center">{{ session('message') }}</div>
            @endif
            <form wire:submit.prevent="storeBranche">
                <div class="from-group">
                    <label for="codebr">Code branche</label>
                    <input type="number" class="form-control" wire:model="codebr"/>
                    {{-- Pour validation --}}
                    @error('codebr')
                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                    @enderror
                </div>

                <div class="from-group">
                    <label for="nombr">Nom branche</label>
                    <input type="text" class="form-control" wire:model="nombr"/>
                    {{-- Pour validation --}}
                    @error('nombr')
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