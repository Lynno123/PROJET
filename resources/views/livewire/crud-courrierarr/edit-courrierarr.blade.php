<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="float: left";>Edit courrier arrivé</h5>
                        <a href="{{ route('courrierarrs') }}" class="btn btn-sm btn-primary" style="float: right;">Liste des courriers arrivés</a>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <form wire:submit.prevent="updateCourrierarr">
                            <div class="from-group">
                                <label for="numCr">Numero courrier</label>
                                <input type="text" class="form-control" wire:model="numCr"/>
                                {{-- Pour validation --}}
                                @error('numCr')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="from-group">
                                <label for="dateArrive">Date arrivé</label>
                                <input type="date" class="form-control" wire:model="dateArrive"/>
                                {{-- Pour validation --}}
                                @error('dateArrive')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="from-group">
                                    <label for="expediteur">Expediteur</label>
                                    <input type="text" class="form-control" wire:model="expediteur"/>
                                    {{-- Pour validation --}}
                                    @error('expediteur')
                                        <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                    @enderror
                            </div>
                            
                            <div class="from-group">
                                <label for="objet">Objet</label>
                                <input type="text" class="form-control" wire:model="objet"/>
                                {{-- Pour validation --}}
                                @error('objet')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="from-group">
                                <label for="observation">Observation</label>
                                <input type="text" class="form-control" wire:model="observation"/>
                                {{-- Pour validation --}}
                                @error('observation')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                          
                            <div class="from-group">
                                <label for="direction">Direction</label>
                                <input type="text" class="form-control" wire:model="direction"/>
                                {{-- Pour validation --}}
                                @error('direction')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>
                         
                            <br> 
                            <div class="from-group text-center">
                                <button type="submit" class="btn btn-primary btn-sm w-50">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
