 <nav class="bg-white border border-gray-200">
     <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
         <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
             <img src="{{ asset('assets/img/logo-ahay.png') }}" class="h-12" alt="Flowbite Logo" />
         </a>
         <button data-collapse-toggle="navbar-default" type="button"
             class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
             aria-controls="navbar-default" aria-expanded="false">
             <span class="sr-only">Open main menu</span>
             <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                 xmlns="http://www.w3.org/2000/svg">
                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7">
                 </path>
             </svg>
         </button>
         <div class="hidden w-full md:block md:w-auto" id="navbar-default">
             <ul
                 class="font-medium flex flex-col items-center p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-12 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-white ">
                 <li>
                     <a href="{{ route('landing') }}"
                         class="block py-2 px-3  rounded md:bg-transparent {{ request()->routeIs('landing') ? 'text-blue-700' : 'text-pr-80 md:hover:text-blue-700' }} md:p-0 "
                         aria-current="page">Home</a>
                 </li>
                 <li>
                     <a href="https://ahay.my.id/#about"
                         class="block py-2 px-3  rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 {{ request('#about') ? 'text-blue-700' : 'text-pr-80 md:hover:text-blue-700' }} md:p-0 ">About</a>
                 </li>
                 <li>
                     <a href="{{ route('project.landing') }}"
                         class="block py-2 px-3 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 {{ request()->routeIs('project.landing') ? 'text-blue-700' : 'text-pr-80 md:hover:text-blue-700' }} md:p-0 ">Project</a>
                 </li>
                 <li>
                     <a href="https://wa.me/6289691973981"
                         class="bg-pr-50 block py-2 px-3 rounded md:hover:bg-pr-60 md:border-0 text-white md:px-6 md:py-2 ">Contact Me</a>
                 </li>
             </ul>
         </div>
     </div>
 </nav>
