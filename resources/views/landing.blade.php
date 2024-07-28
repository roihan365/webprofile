<x-guest-layout>
    <div class="max-w-screen-xl mx-auto p-6 xl:p-0">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
            <div>
                <h2 class="text-h2 font-extrabold pb-4">M. Sohibur<span class="text-pr-40">roihan</span> Akbar</h2>
                <h1 class="text-h1 font-bold">Full Stack Web Developer</h1>
                <p class="text-p text-ne-70 pt-2">Halo, saya Roihan, seorang Full Stack Developer dengan pengalaman lebih
                    dari 3 tahun dalam mengembangkan berbagai macam website dan aplikasi. Saya memiliki keahlian dalam
                    PHP Laravel, HTML, CSS, JavaScript, dan framework modern lainnya. Saya selalu bersemangat untuk
                    mengeksplorasi teknologi baru dan menciptakan solusi web yang inovatif dan efisien.</p>

                <div class="flex flex-col sm:flex-row items-start sm:items-center pt-8 gap-4">
                    <a href="https://wa.me/6289691973981"
                        class="text-white bg-pr-50 hover:bg-pr-70 focus:ring-4 focus:ring-pr-70 rounded-lg px-5 py-2.5 me-2 mb-2 sm:mb-0 focus:outline-none">Contact
                        Me</a>
                    <a href="https://www.linkedin.com/in/sohiburroihan/"
                        class="text-black bg-transparent border border-ne-60 hover:border-pr-50 hover:text-pr-50 focus:ring-4 focus:ring-pr-70 rounded-lg px-5 py-2.5 me-2 mb-2 sm:mb-0">My
                        Resume</a>
                </div>
            </div>
            <div class="hidden md:flex justify-center">
                <img src="{{ asset('assets/img/roihan-profile.png') }}" alt="Roihan Image Profile"
                    class="w-full max-w-xs lg:w-[392px]" />
            </div>
        </div>
    </div>
    <div class="w-full bg-pr-0 flex justify-center items-center p-8">
        <img src="{{ asset('assets/img/skill.png') }}" alt="Roihan Skill's" class="" />
    </div>
    <div class="max-w-screen-xl mx-auto p-6 xl:p-0" id="about">
        <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8 pt-8">
            <div class="flex justify-center">
                <img src="{{ asset('assets/img/profile-about.png') }}" alt="Roihan Image Profile"
                    class="w-full max-w-lg lg:w-[392px]" />
            </div>
            <div>
                <h1 class="text-h1 font-bold">About Me</h1>
                <p class="text-p text-ne-70 pt-2">Ding Dong! Saya Roihan, seorang pengembang web yang siap menciptakan
                    solusi digital yang intuitif dan berfungsi dengan baik. Sejak memulai karir saya sebagai Full Stack
                    Web Developer, saya telah bekerja dengan berbagai klien untuk mewujudkan visi mereka melalui
                    teknologi web.</p>

                <h5 class="text-h5 font-bold py-5">Pengalaman Kerja/Magang</h5>
                <ol class="items-center sm:flex">
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold text-gray-900">Digitaliz</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400">Programmer,
                                June 2024 - Now</time>
                            {{-- <p class="text-base font-normal text-gray-500">Get started with dozens of
                                web components and interactive elements.</p> --}}
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold text-gray-900">Bangkit Academy</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400">Mentor
                                Mobile, Feb - June 2024</time>
                        </div>
                    </li>
                    <li class="relative mb-6 sm:mb-0">
                        <div class="flex items-center">
                            <div
                                class="z-10 flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full ring-0 ring-white sm:ring-8 shrink-0">
                                <svg class="w-2.5 h-2.5 text-blue-800" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z" />
                                </svg>
                            </div>
                            <div class="hidden sm:flex w-full bg-gray-200 h-0.5"></div>
                        </div>
                        <div class="mt-3 sm:pe-8">
                            <h3 class="text-lg font-semibold text-gray-900">Yayasan Hasnur Centre</h3>
                            <time
                                class="block mb-2 text-sm font-normal leading-none text-gray-400">Web
                                Developer, Aug - Dec 2024</time>
                        </div>
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <div class="px-4 sm:px-8 md:px-16 bg-pr-0 grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="p-6 md:p-14 flex flex-col gap-y-6">
            <h3 class="text-h2 font-bold text-pr-60">Ubah Produk Anda Menjadi Digital</h3>
            <p class="font-medium text-ne-80 text-justify">Sebagai web developer berpengalaman, saya siap memenuhi
                kebutuhan digital Anda. Mempercayakan proyek Anda kepada ahlinya adalah keputusan yang bijaksana, dan
                saya menawarkan hasil yang optimal dengan kualitas yang dapat diandalkan. Dengan rekam jejak proyek
                pengembangan web yang sukses, saya memberikan banyak pengalaman dan komitmen untuk memberikan hasil
                terbaik. Jelajahi bagaimana saya dapat meningkatkan kehadiran digital Anda dan mewujudkan visi Anda.</p>
        </div>
        <div class="py-6 md:py-14 flex flex-col gap-y-6 text-white">
            <a href="{{ route('project.landing') }}">
                <div class="bg-pr-70 flex items-center gap-x-6">
                    <img src="{{ asset('assets/img/uiux.png') }}" class="w-24 h-24 md:w-36 md:h-36" alt="">
                    <div class="flex flex-col w-full">
                        <p class="text-h5 md:text-h4 font-semibold">UI/UX Design</p>
                        <p class="font-medium text-ne-60">30 Project</p>
                    </div>
                    <div class="me-6">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_206_68" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_206_68)">
                                <path
                                    d="M21.1249 20L15.9999 25.125L18.3333 27.5L25.8333 20L18.3333 12.5L15.9999 14.875L21.1249 20ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2292 13.4999 35.3542C11.4721 34.4792 9.70825 33.2917 8.20825 31.7917C6.70825 30.2917 5.52075 28.5278 4.64575 26.5C3.77075 24.4723 3.33325 22.3056 3.33325 20C3.33325 17.6945 3.77075 15.5278 4.64575 13.5C5.52075 11.4723 6.70825 9.70837 8.20825 8.20837C9.70825 6.70837 11.4721 5.52087 13.4999 4.64587C15.5277 3.77087 17.6944 3.33337 19.9999 3.33337C22.3055 3.33337 24.4721 3.77087 26.4999 4.64587C28.5277 5.52087 30.2916 6.70837 31.7916 8.20837C33.2916 9.70837 34.4791 11.4723 35.3541 13.5C36.2291 15.5278 36.6666 17.6945 36.6666 20C36.6666 22.3056 36.2291 24.4723 35.3541 26.5C34.4791 28.5278 33.2916 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4792 26.4999 35.3542C24.4721 36.2292 22.3055 36.6667 19.9999 36.6667ZM19.9999 33.3334C23.7221 33.3334 26.8749 32.0417 29.4583 29.4584C32.0416 26.875 33.3333 23.7223 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95837 23.7221 6.66671 19.9999 6.66671C16.2777 6.66671 13.1249 7.95837 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7223 7.95825 26.875 10.5416 29.4584C13.1249 32.0417 16.2777 33.3334 19.9999 33.3334Z"
                                    fill="#EEC643" />
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('project.landing') }}">
                <div class="bg-pr-70 flex items-center gap-x-6">
                    <img src="{{ asset('assets/img/web.png') }}" class="w-24 h-24 md:w-36 md:h-36" alt="">
                    <div class="flex flex-col w-full">
                        <p class="text-h5 md:text-h4 font-semibold">Website</p>
                        <p class="font-medium text-ne-60">13 Project</p>
                    </div>
                    <div class="me-6">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_206_68" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_206_68)">
                                <path
                                    d="M21.1249 20L15.9999 25.125L18.3333 27.5L25.8333 20L18.3333 12.5L15.9999 14.875L21.1249 20ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2292 13.4999 35.3542C11.4721 34.4792 9.70825 33.2917 8.20825 31.7917C6.70825 30.2917 5.52075 28.5278 4.64575 26.5C3.77075 24.4723 3.33325 22.3056 3.33325 20C3.33325 17.6945 3.77075 15.5278 4.64575 13.5C5.52075 11.4723 6.70825 9.70837 8.20825 8.20837C9.70825 6.70837 11.4721 5.52087 13.4999 4.64587C15.5277 3.77087 17.6944 3.33337 19.9999 3.33337C22.3055 3.33337 24.4721 3.77087 26.4999 4.64587C28.5277 5.52087 30.2916 6.70837 31.7916 8.20837C33.2916 9.70837 34.4791 11.4723 35.3541 13.5C36.2291 15.5278 36.6666 17.6945 36.6666 20C36.6666 22.3056 36.2291 24.4723 35.3541 26.5C34.4791 28.5278 33.2916 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4792 26.4999 35.3542C24.4721 36.2292 22.3055 36.6667 19.9999 36.6667ZM19.9999 33.3334C23.7221 33.3334 26.8749 32.0417 29.4583 29.4584C32.0416 26.875 33.3333 23.7223 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95837 23.7221 6.66671 19.9999 6.66671C16.2777 6.66671 13.1249 7.95837 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7223 7.95825 26.875 10.5416 29.4584C13.1249 32.0417 16.2777 33.3334 19.9999 33.3334Z"
                                    fill="#EEC643" />
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
            <a href="{{ route('project.landing') }}">
                <div class="bg-pr-70 flex items-center gap-x-6">
                    <img src="{{ asset('assets/img/mobile.png') }}" class="w-24 h-24 md:w-36 md:h-36" alt="">
                    <div class="flex flex-col w-full">
                        <p class="text-h5 md:text-h4 font-semibold">Android Apps</p>
                        <p class="font-medium text-ne-60">2 Project</p>
                    </div>
                    <div class="me-6">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <mask id="mask0_206_68" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0"
                                width="40" height="40">
                                <rect width="40" height="40" fill="#D9D9D9" />
                            </mask>
                            <g mask="url(#mask0_206_68)">
                                <path
                                    d="M21.1249 20L15.9999 25.125L18.3333 27.5L25.8333 20L18.3333 12.5L15.9999 14.875L21.1249 20ZM19.9999 36.6667C17.6944 36.6667 15.5277 36.2292 13.4999 35.3542C11.4721 34.4792 9.70825 33.2917 8.20825 31.7917C6.70825 30.2917 5.52075 28.5278 4.64575 26.5C3.77075 24.4723 3.33325 22.3056 3.33325 20C3.33325 17.6945 3.77075 15.5278 4.64575 13.5C5.52075 11.4723 6.70825 9.70837 8.20825 8.20837C9.70825 6.70837 11.4721 5.52087 13.4999 4.64587C15.5277 3.77087 17.6944 3.33337 19.9999 3.33337C22.3055 3.33337 24.4721 3.77087 26.4999 4.64587C28.5277 5.52087 30.2916 6.70837 31.7916 8.20837C33.2916 9.70837 34.4791 11.4723 35.3541 13.5C36.2291 15.5278 36.6666 17.6945 36.6666 20C36.6666 22.3056 36.2291 24.4723 35.3541 26.5C34.4791 28.5278 33.2916 30.2917 31.7916 31.7917C30.2916 33.2917 28.5277 34.4792 26.4999 35.3542C24.4721 36.2292 22.3055 36.6667 19.9999 36.6667ZM19.9999 33.3334C23.7221 33.3334 26.8749 32.0417 29.4583 29.4584C32.0416 26.875 33.3333 23.7223 33.3333 20C33.3333 16.2778 32.0416 13.125 29.4583 10.5417C26.8749 7.95837 23.7221 6.66671 19.9999 6.66671C16.2777 6.66671 13.1249 7.95837 10.5416 10.5417C7.95825 13.125 6.66659 16.2778 6.66659 20C6.66659 23.7223 7.95825 26.875 10.5416 29.4584C13.1249 32.0417 16.2777 33.3334 19.9999 33.3334Z"
                                    fill="#EEC643" />
                            </g>
                        </svg>
                    </div>
                </div>
            </a>
        </div>
    </div>

</x-guest-layout>
