<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Livewire</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Roboto+Slab:wght@100..900&display=swap');
        </style>
    </head>

    <body>

        <div class="text-2xl">Bem-vindo ao Livewire</div>
        <div class="text-sm">
            Este é um exemplo simples de componente do Livewire.
        </div>
        {{--
            <livewire:counter />
            <livewire:message />
        --}}
        <livewire:calculator />

        @livewireScripts
    </body>

</html>
