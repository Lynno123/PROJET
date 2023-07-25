
<div>
    <div class="row">
        <div class="col-md-12">
            @if (session()->has('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
        </div>
    </div>
    @if($registerForm)
        <form class="row g-3">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Name :</label>
                        <input type="text" wire:model="name" class="form-control border-info" >
                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control border-info">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control border-info">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div> 

                <div class="col-auto">
                    <button class="btn text-white btn-success" wire:click.prevent="registerStore">S'enregistrer</button>
                </div>
                <div class="col-auto">
                    <a class="btn btn-primary" wire:click.prevent="register">Se connecter</a>
                </div>
            </div>
        </form>
    @else
        <form class="row g-3" wire:submit.prevent="login">
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Email :</label>
                        <input type="text" wire:model="email" class="form-control border-info rounded-pill">
                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Password :</label>
                        <input type="password" wire:model="password" class="form-control border-info rounded-pill">
                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

                <div class="col-auto">
                    <button type="submit" class="btn text-white btn-success rounded-pill" wire:click.prevent="login">Se connecter</button>
                </div>
                <div class="col-auto">
                     <a class="btn btn-primary text-white rounded-pill" wire:click.prevent="register">S'enregistrer</a>
                </div>
    @endif
</div>