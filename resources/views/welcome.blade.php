<!DOCTYPE html>
<html lang="pt-BR">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>VK Beauty Scheduler</title>

        <meta name="description" content="VK Beauty Scheduler - Agendamento de Beleza" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="application-name" content="VK Beauty Scheduler" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
        <style>
            @import url('https://fonts.googleapis.com/css2?family=Loira:ital,wght@0,400..700;1,400..700&family=Roboto+Slab:wght@100..900&display=swap');
        </style>
    </head>

    <body class="bg-page">
        <div class="container">
            <header class="text-2xl">Bem-vindo ao VK Beauty Scheduler</header>
            <main>
                @yield('content')
            </main>
        </div>
        <footer>
            <div class="container mx-auto py-4 inset-x-0 bottom-0 mt-4">
                <p class="text-center text-sm text-gray-600">
                    &copy; {{ date('Y') }} VK Beauty Scheduler. Todos os direitos reservados.
                </p>
            </div>
        </footer>
        @livewireScripts
    </body>

</html>
