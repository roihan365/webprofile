<x-guest-layout>
    <div class="mx-auto p-6 lg:p-12">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div>
                <h1 class="text-h1 font-bold">Ide, Aksi, Transformasi</h1>
                <p class="text-p text-ne-70 pt-2">Setiap karya dimulai dengan sebuah ide, diubah menjadi aksi nyata, dan
                    berakhir sebagai transformasi yang mengesankan. Inilah proses yang mendefinisikan setiap proyek yang
                    saya kerjakan.</p>
            </div>
        </div>
        <div class="py-6 grid sm:grid-cols-12 gap-8 items-start">

            {{-- Left Column --}}
            <div class="bg-ne-0 rounded-lg sm:col-span-2 grid gap-2 p-4">
                <h2 class="font-bold text-xl">Tipe</h2>
                <hr class="border-slate-300">
                <div class="flex items-center gap-2">
                    <input type="radio" name="type" id="type-uiux" value="uiux" class="rounded-lg">
                    <label for="type-uiux">UI/UX</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" name="type" id="type-website" value="website" class="rounded-lg">
                    <label for="type-website">Website</label>
                </div>
                <div class="flex items-center gap-2">
                    <input type="radio" name="type" id="type-android" value="android" class="rounded-lg">
                    <label for="type-android">Android Apps</label>
                </div>
            </div>

            {{-- Right Column --}}
            <div class=" bg-white rounded-lg sm:col-span-10 grid gap-4">
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-6">
                    @forelse ($projects as $project)
                        <a href="{{ route('project.show', $project) }}">
                            <div class="bg-ne-0 border border-pr-60 rounded-md drop-shadow-lg">
                                <img src="{{ $project->getFirstMediaUrl('images') }}"
                                    class="overflow-hidden min-h-48 max-h-48 w-full object-cover rounded-md"
                                    alt="">
                                <div class="flex flex-col px-4 py-4">
                                    <p class="text-lg font-bold line-clamp-2">{{ $project->name }}</p>
                                    <div class="flex flex-wrap gap-2 mt-2">
                                        <span
                                            class="bg-pr-70 text-ne-20 text-xs font-medium px-2.5 py-1 rounded-full">{{ $project->category->name }}</span>
                                        {{-- <span
                                            class="bg-pr-70 text-ne-20 text-xs font-medium px-2.5 py-1 rounded-full">{{ $project->team }}</span> --}}
                                    </div>
                                </div>
                            </div>
                        </a>
                    @empty
                        <p>Tidak ada project</p>
                    @endforelse
                </div>
            </div>
        </div>

    </div>
</x-guest-layout>
