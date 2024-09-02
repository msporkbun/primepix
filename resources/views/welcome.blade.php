<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-sans">
        <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
            <div class="relative min-h-screen flex flex-col items-center justify-center selection:bg-[#FF2D20] selection:text-white">
                <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
                    <livewire:welcome.header />
                    <main class="mt-6">
                        <div class="flex items-center justify-center bg-cover bg-center">
                            <div class="text-center px-6 sm:px-8 lg:px-10 max-w-2xl bg-opacity-90 bg-gray-700 rounded-lg py-12 shadow-lg backdrop-blur">
                                <h1 class="text-5xl sm:text-6xl font-bold text-white tracking-wide mb-6">
                                PrimePix
                                </h1>
                                <p class="text-2xl sm:text-3xl font-semibold text-gray-300 mb-6">
                                For People Who Love Films
                                </p>
                                <p class="text-lg sm:text-xl text-gray-400 mb-8">
                                Discover, review, and connect with a community of movie and show enthusiasts. Dive deep into the world of storytelling, from blockbusters to hidden gems.
                                </p>
                            </div>
                        </div>
                    </main>

                    <footer class="py-16 text-center text-sm text-black dark:text-white/70">
                        PrimePix © {{ date('Y') }}
                    </footer>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>
