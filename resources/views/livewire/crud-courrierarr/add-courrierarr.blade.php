            <div>

                                <div class="card-body">
                                    @if (session()->has('message'))
                                        <div class="alert alert-success text-center">{{ session('message') }}</div>
                                    @endif
                                    <form wire:submit.prevent="storeCourrierarr">
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
                                            <input type="number" class="form-control" wire:model="direction"/>
                                            {{-- Pour validation --}}
                                            @error('direction')
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
       



