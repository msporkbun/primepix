<nav class="bg-blue-900 p-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo/Brand -->
        <div class="text-blue-200 font-bold text-xl">
            <a href="#">PrimePix</a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="block md:hidden">
            <button wire:click="toggleMenu" class="text-blue-200 focus:outline-none">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                </svg>
            </button>
        </div>

        <!-- Center Section: Navigation Links -->
        <div class="hidden md:flex space-x-8 text-sm font-bold">
            <a href="#" class="hover:text-blue-400">Movies</a>
            <a href="#" class="hover:text-blue-400">Reviews</a>
            <a href="#" class="hover:text-blue-400">Shows</a>
            <a href="#" class="hover:text-blue-400">Actors</a>
            <a href="#" class="hover:text-blue-400">Lists</a>
        </div>

        <!-- Profile Icon -->
        <div class="hidden md:block">
            <a href="#" class="text-blue-200 hover:text-blue-400">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.982 18.725A7.488 7.488 0 0 0 12 15.75a7.488 7.488 0 0 0-5.982 2.975m11.963 0a9 9 0 1 0-11.963 0m11.963 0A8.966 8.966 0 0 1 12 21a8.966 8.966 0 0 1-5.982-2.275M15 9.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                </svg>
            </a>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="{{ $isOpen ? 'block' : 'hidden' }} md:hidden mt-4 space-y-4">
        <a href="#" class="block text-blue-200 hover:text-blue-400">Movies</a>
        <a href="#" class="block text-blue-200 hover:text-blue-400">Reviews</a>
        <a href="#" class="block text-blue-200 hover:text-blue-400">Shows</a>
        <a href="#" class="block text-blue-200 hover:text-blue-400">Actors</a>
        <a href="#" class="block text-blue-200 hover:text-blue-400">Lists</a>
    </div>
</nav>