<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-5 ">
                <div class="card">
                    <div class="card-header">
                        <h5 class="card-title" style="float: left";>Edit administrateur</h5>
                        <a href="{{ route('users') }}" class="btn btn-sm btn-primary" style="float: right;">Liste des administrateurs</a>
                    </div>
                    <div class="card-body">
                        @if (session()->has('message'))
                            <div class="alert alert-success text-center">{{ session('message') }}</div>
                        @endif
                        <form wire:submit.prevent="updateUser">
                            <div class="from-group">
                                <label for="name">Nom</label>
                                <input type="text" class="form-control" wire:model="name"/>
                                {{-- Pour validation --}}
                                @error('name')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="from-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" wire:model="email"/>
                                {{-- Pour validation --}}
                                @error('email')
                                    <span class="text-danger" style="font-size: 12.5px;">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="from-group">
                                    <label for="password">Mot de passe</label>
                                    <input type="password" class="form-control" wire:model="password"/>
                                    {{-- Pour validation --}}
                                    @error('password')
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
