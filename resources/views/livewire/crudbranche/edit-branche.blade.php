<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="float: left";>Edit branches</h5>
                        <a href="{{ route('branches') }}" class="btn btn-sm btn-primary" style="float: right;">Liste des branches</a>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <form wire:submit.prevent="updateBranche">
                            <div class="from-group">
                                <label for="codebr">Code branche</label>
                                <input type="text" class="form-control" wire:model="codebr"/>
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
                                <button type="submit" class="btn btn-primary btn-sm w-50">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
