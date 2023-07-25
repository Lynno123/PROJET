<!DOCTYPE html>
<html>
<head>
    <title></title>
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    @livewireStyles
</head>
<body>
    <div class="container">
        <div class="row mt-5 justify-content-center">
            <div class="mt-5 col-md-5">
                <div class="card">
                    <div class="card-header bg-info text-white"><h5 style="font-size: 23px;">Login</h5></div>

                    <div class="card-body bg-white">
                        @livewire('login-register')
                    </div>
                </div>
            </div>
        </div>
    </div>
 
    @livewireScripts

</body>
</html>