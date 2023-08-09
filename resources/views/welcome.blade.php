<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    @vite('resources/css/app.css')
    @livewireStyles
    @bukStyles(true)
</head>

<body>
    @livewire('component.navbar-component')
    @livewire('component.main-content')
    @livewire('component.about')
    @livewire('component.skills')

    @include('component.project')
    @livewire('component.contact')

    @stack('scripts')
    @livewireScripts
    @bukScripts(true)
</body>

</html>
