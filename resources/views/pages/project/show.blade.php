<x-guest-layout>
    <div class="bg-gray-100 text-gray-800 min-h-screen">
        <div class="container mx-auto p-4 md:p-8">
            <div class="grid grid-cols-12 gap-4 md:gap-8">
                <!-- Left Side (8/12) -->
                <div class="col-span-12 lg:col-span-8">
                    <!-- Image Carousel -->
                    <div id="default-carousel" class="relative w-full" data-carousel="slide">
                        <!-- Carousel wrapper -->
                        <div class="relative h-56 overflow-hidden rounded-t-lg md:h-96">
                            <!-- Item 1 -->
                            @foreach ($project->getMedia('images') as $index => $media)
                                <div class="{{ $index === 0 ? 'block' : 'hidden' }} duration-700 ease-in-out"
                                    data-carousel-item>
                                    <img src="{{ $media->getUrl() }}"
                                        class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                        alt="...">
                                </div>
                            @endforeach
                        </div>
                        <!-- Slider indicators -->
                        <div
                            class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                                data-carousel-slide-to="0"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 2" data-carousel-slide-to="1"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 3" data-carousel-slide-to="2"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 4" data-carousel-slide-to="3"></button>
                            <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                aria-label="Slide 5" data-carousel-slide-to="4"></button>
                        </div>
                        <!-- Slider controls -->
                        <button type="button"
                            class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-prev>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M5 1 1 5l4 4" />
                                </svg>
                                <span class="sr-only">Previous</span>
                            </span>
                        </button>
                        <button type="button"
                            class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                            data-carousel-next>
                            <span
                                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 9 4-4-4-4" />
                                </svg>
                                <span class="sr-only">Next</span>
                            </span>
                        </button>
                    </div>

                    <!-- Tentang Project Ini -->
                    <div class="bg-white p-6 rounded-b-lg shadow">
                        <h2 class="text-2xl font-bold mb-4">Tentang Project Ini</h2>
                        <p><span class="font-bold">{{ $project->name }}</span> - {{ $project->description }}</p>
                    </div>
                </div>

                <!-- Right Side (4/12) -->
                <div class="col-span-12 lg:col-span-4">
                    <div class="bg-white p-6 rounded-lg shadow">
                        <h2 class="text-2xl font-bold mb-4">Informasi Proyek</h2>
                        <ul>
                            <li class="mb-2">
                                <strong>Category:</strong> <span>{{ $project->category->name }}</span>
                            </li>
                            <li class="mb-2">
                                <strong>Client:</strong> <span>{{ $project->client ?? '-' }}</span>
                            </li>
                            <li class="mb-2">
                                <strong>Project Date:</strong> <span>{{ $project->date }}</span>
                            </li>
                            @foreach ($project->urls as $url)
                                <li class="mb-2">
                                    <strong>{{ $url->name }} URL:</strong> <a href="{{ $url->url }}"
                                        class="text-blue-500">{{ $url->url }}</a>
                                </li>
                            @endforeach
                            <li class="mb-2">
                                <strong>Team:</strong> <span>{{ $project->team }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
