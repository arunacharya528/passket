<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    @vite('resources/css/app.css')
    @livewireStyles
</head>

<body>
    <div class="block md:w-4/5 mx-auto space-y-10">
        <img src="{{ asset('assets/logo.png') }}" class="h-52" />

        <livewire:layouts.tab-layout />
        @include('sponsors')

    </div>

    @livewireScripts
</body>

</html>
