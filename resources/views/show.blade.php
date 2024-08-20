@extends('layouts.main')

@section('content')
    <div class="container mx-auto px-4 pt-16">
        <div class="popular-movies">
            <div class="movie-info
                border-b border-gray-800">
                <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
                    <img src="/img/parasite.jpg" alt="parasite" class="w-64 lg:w-96">
                    <div class="md:ml-24">
                        <h2 class="text-4xl font-semibold">Parasite (2019)</h2>
                        <div class="flex flex-wrap items-center text-gray-400 text-sm">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="fill-current w-4 text-yellow-500">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                                </svg>
                            </span>
                            <span class="ml-1">85%</span>
                            <span class="mx-2">|</span>
                            <span>Feb 20, 2020</span>
                            <span class="mx-2">|</span>
                            <span>Action, Thriller</span>
                        </div>
                        <p class="text-gray-300 mt-8">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut purus eget nunc. Nullam auctor, nisl nec ultricies ultricies, nunc nunc ultricies nunc, nec ultricies nunc nunc nec nunc. Nullam auctor, nisl nec ultricies ultricies, nunc nunc ultricies nunc, nec ultricies nunc nunc nec nunc.
                        </p>
                        <div class="mt-12">
                            <h4 class="text-white
                                font-semibold">Featured Cast</h4>
                            <div class="flex mt-4">
                                <div>
                                    <div>Bong Joon-ho</div>
                                    <div class="text-sm text-gray-400">Screenplay, Director, Story</div>
                                </div>
                                <div class="ml-8">
                                    <div>Choi Woo-shik</div>
                                    <div class="text-sm text-gray-400">Ki-taek</div>
                                </div>
                            </div>
                        </div>
                        <div class="mt-12">
                            <button class="flex items-center bg-orange-500 text-gray-900 rounded font-semibold px-5 py-4 hover:bg-orange-600 transition ease-in-out duration-150">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1" stroke="currentColor" class="fill-current w-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                                <span class="ml-2">Play Trailer</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
