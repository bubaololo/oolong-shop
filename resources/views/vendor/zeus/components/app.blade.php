<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{ __('filament-panels::layout.direction') ?? 'ltr' }}" class="antialiased filament js-focus-visible">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="application-name" content="{{ config('app.name', 'Laravel') }}">

    <!-- Seo Tags -->
    <x-seo::meta/>
    <!-- Seo Tags -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai:wght@300;400;700;800&family=KoHo:ital,wght@0,200;0,300;0,500;0,700;1,200;1,300;1,600;1,700&display=swap" rel="stylesheet">

    @livewireStyles
    @filamentStyles
    @stack('styles')

    <link rel="stylesheet" href="{{ asset('vendor/zeus/frontend.css') }}">

    <style>
        * {font-family: 'KoHo', 'Almarai', sans-serif;}
        [x-cloak] {display: none !important;}
    </style>
    <style>
        /*custom styles*/
        .main-logo {
            max-width: 80px;
            display: inline-block;
            margin-top: 30px;
        }
    </style>
</head>
<body class="font-sans antialiased bg-gray-50 text-gray-900 dark:text-gray-100 dark:bg-gray-900 @if(app()->isLocal()) debug-screens @endif">

<header x-data="{ open: false }" class="bg-white dark:bg-black px-4">
    <div class="container mx-auto">
        <div class="flex justify-between h-16">
            <div class="flex">
                <div class="flex-shrink-0 flex items-center">
                    <a class="italic flex gap-2 group" href="{{ url('/') }}">
                        <img class="main-logo" src="{{ asset('images/oolong_logo.svg') }}" alt="">
                    </a>
                </div>

                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex sm:items-center">
                    {{--Navigation Links--}}
                </div>

            </div>
            <div class=" sm:flex sm:items-center sm:ml-6">
                {{--Account menu and other icons--}}
                <div class="flex justify-center items-center">
                    <div class="text-center">
                        <button onclick="switchLang('en')" class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100">English</button>
                        <button onclick="switchLang('es')" class="px-4 py-2 border border-gray-300 rounded hover:bg-gray-100 ml-2">Spanish</button>
                    </div>

                    <script src="https://cdn.tailwindcss.com"></script>
                    <script>
                      function switchLang(lang) {
                        fetch('/switchLang/' + lang)
                            .then(response => {
                              if (response.ok) {
                                window.location.reload();
                              }
                            })
                            .catch(error => console.error('Error:', error));
                      }
                    </script>
                </div>

            </div>
        </div>
    </div>
</header>

<header class="bg-gray-100 dark:bg-gray-800">
        <div class="container mx-auto py-2 px-3">
            <div class="flex justify-between items-center">
                <div class="w-full">
                    @if(isset($breadcrumbs))
                        <nav class="text-gray-400 font-bold my-1" aria-label="Breadcrumb">
                            <ol class="list-none p-0 inline-flex">
                                {{ $breadcrumbs }}
                            </ol>
                        </nav>
                    @endif
                    @if(isset($header))
                        <div class="italic font-semibold text-xl text-gray-600 dark:text-gray-100">
                            {{ $header }}
                        </div>
                    @endif
                </div>
                <span class="bolt-loading animate-pulse"></span>
            </div>
        </div>
    </header>

<div class="container mx-auto my-6">
    {{ $slot }}
</div>

<footer class="bg-gray-100 dark:bg-gray-800 p-6 text-center font-light">
Oloong.me
</footer>

@stack('scripts')
@livewireScripts
@filamentScripts
@livewire('notifications')

<script>
    const theme = localStorage.getItem('theme')

    if ((theme === 'dark') || (! theme && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('dark')
    }
</script>

</body>
</html>
