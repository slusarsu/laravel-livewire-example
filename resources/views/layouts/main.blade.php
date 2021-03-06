<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
{{--    <script defer src="https://unpkg.com/alpinejs@3.2.2/dist/cdn.min.js"></script>--}}
    <title>Livewire</title>

    @livewireStyles

</head>
<body>
<div class="container py-2">
    <div class="row">
        <div class="col-12">
            <x-top-menu/>
        </div>

        <div class="col-12 py-3">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title">{{$title ?? __('messages.livewire_is')}}</h5>
                </div>
                <div class="card-body">
                    <div class="card-text">@yield('content')</div>
                </div>
            </div>
        </div>
    </div>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

@livewireScripts
</body>
</html>
