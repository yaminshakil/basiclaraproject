<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <style type="text/css">
            .add_post
            {
                padding-left:21%;
                padding-right:19%;
                 padding-bottom: 25px; 
                 font-size: 20px; 
                background: #CDDAD4; 
                width: 100%;
                 font-weight: bold;
                 padding-top: 15px;

            }

            .upload_post
            {
                background:#F1F3B7;
                width: 50%;
                 padding-top:30px;
                 padding-bottom: 30px;
                 padding-left: 15px;
            }

            .home
            {

                padding-left:140px;
                 padding-bottom: 20px;
                 background: skyblue;
                 cursor: pointer;
                 padding: 10px;
                 border-radius: 10px;
            }

            .view_post
            {
                padding-left:140px;
                 padding-bottom: 20px;
                 background: greenyellow;
                 cursor: pointer;
                  padding: 10px;
                 border-radius: 10px;
            }

             
        </style>

        

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased" style="background:#345961
">
        <x-jet-banner />

        <div class="">
            @livewire('navigation-menu')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
