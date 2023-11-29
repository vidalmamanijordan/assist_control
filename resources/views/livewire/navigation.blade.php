@php
    $nav_links = [
        [
            'name' => 'Control asistencia',
            'route' => route('dashboard'),
            'active' => request()->routeIs('dashboard'),
        ],
    ];
@endphp
<nav x-data="{ open: false }"
    class="fixed top-0 z-50 w-full bg-sky-950 border-b border-sky-200 dark:bg-sky-800 dark:border-sky-700">
    <div class="px-3 py-3 lg:px-5 lg:pl-3">
        <div class="flex items-center justify-between">
            <div class="flex items-center justify-start rtl:justify-end">
                {{-- hamburger button {start} --}}
                @auth
                    {{-- Mobile {start} --}}
                    <div x-data="{ open: false }">
                        <button x-on:click="open=true" data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                            aria-controls="logo-sidebar" type="button"
                            class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                            <span class="sr-only">Open sidebar</span>
                            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                                </path>
                            </svg>
                        </button>
                        <div x-show="open" x-on:click.away="open=false"
                            class="absolute left-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                            <ul class="space-y-2 font-medium">
                                {{-- Users {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-user-group text-gray-500"></i>
                                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Usuarios</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('adminusers.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                usuarios</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminusers.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                usuario</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Users {end} --}}

                                {{-- Sedes {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-building text-gray-500"></i>
                                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Sedes</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('adminsedes.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                sedes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminsedes.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                sede</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Sedes {end} --}}

                                {{-- Faculties {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-tents text-gray-500"></i>
                                        <span
                                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Facultades</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('adminfaculties.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                facultades</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminfaculties.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                facultad</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Faculties {end} --}}

                                {{-- Careers {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-city text-gray-500"></i>
                                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Carreras</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('admincareers.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                carreras</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('admincareers.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                carrera</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Careers {end} --}}

                                {{-- Participant {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-people-group text-gray-500"></i>
                                        <span
                                            class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Participantes</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('adminparticipants.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                participantes</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminparticipants.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                participante</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminparticipants.import') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Importar</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Participant {end} --}}

                                {{-- Events {start} --}}
                                <li x-data="{ open: false }">
                                    <button x-on:click="open=true" type="button"
                                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        <i class="fa-solid fa-calendar-check text-gray-500"></i>
                                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Eventos</span>
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>
                                    <ul x-show="open" x-on:click.away="open=false" class="py-2 space-y-2">
                                        <li>
                                            <a href="{{ route('adminevents.index') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista
                                                eventos</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('adminevents.create') }}"
                                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear
                                                evento</a>
                                        </li>
                                    </ul>
                                </li>
                                {{-- Events {end} --}}

                                {{-- Assist {start} --}}
                                <li>
                                    <a href="{{ route('adminregistrations.index') }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <i class="fa-solid fa-clipboard-user text-gray-500"></i>
                                        <span class="flex-1 ms-3 whitespace-nowrap">Asistencia</span>
                                    </a>
                                </li>
                                {{-- Assist {end} --}}


                                {{-- Registers {start} --}}
                                <li>
                                    <a href="{{ route('adminassists.index') }}"
                                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                                        <i class="fa-solid fa-address-card text-gray-500"></i>
                                        <span class="flex-1 ms-3 whitespace-nowrap">Registros</span>
                                    </a>
                                </li>
                                {{-- Registers {end} --}}
                            </ul>
                        </div>
                    </div>
                    {{-- Mobile {end} --}}
                @endauth
                {{-- hamburger button {end} --}}

                {{-- logo {start} --}}
                <a href="/" class="flex ms-2 md:me-24">
                    <img class="h-8 w-auto mr-2" src="{{ asset('img/logos/dti_white.png') }}" alt="dti">
                </a>
                {{-- logo {end} --}}

                {{-- dashboard button {start} --}}
                <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                    <div class="hidden sm:ml-6 sm:block">
                        @foreach ($nav_links as $nav_link)
                            <div class="flex space-x-4">
                                <a href="{{ $nav_link['route'] }}" :active="$nav_link['active']"
                                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                                    {{ $nav_link['name'] }}
                                </a>
                            </div>
                        @endforeach
                    </div>
                </div>
                {{-- dashboard button {end} --}}
            </div>
            <div class="flex items-center">
                <div class="flex items-center ms-3">

                    {{-- auth button {start} --}}
                    @auth
                        {{-- notifications button {start} --}}
                        <div>
                            <button type="button"
                                class="mr-3 relative rounded-full bg-gray-800 p-1 text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>
                        </div>
                        {{-- notifications button {start} --}}

                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                            <div x-data="{ open: false }">
                                <div>
                                    <button x-on:click="open=true" type="button"
                                        class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800"
                                        id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="{{ Auth::user()->profile_photo_url }}"
                                            alt="{{ Auth::user()->name }}" alt="">
                                    </button>
                                </div>
                                <div x-show="open" x-on:click.away="open=false"
                                    class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                                    role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button"
                                    tabindex="-1">
                                    <a href="{{ route('profile.show') }}" class="block px-4 py-2 text-sm text-gray-700"
                                        role="menuitem" tabindex="-1" id="user-menu-item-0">Tu perfil
                                    </a>
                                    <form method="POST" action="{{ route('logout') }}" x-data>
                                        @csrf
                                        <a href="{{ route('logout') }}" class="block px-4 py-2 text-sm text-gray-700"
                                            role="menuitem" tabindex="-1" id="user-menu-item-2"
                                            @click.prevent="$root.submit();">
                                            {{ __('Cerrar sesión') }}
                                        </a>
                                    </form>
                                </div>
                            </div>
                        @endif
                    @else
                        <div>
                            <a href="{{ route('login') }}" type="button"
                                class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-3 py-2 text-center mr-2">
                                Iniciar sesión
                            </a>
                        </div>
                    @endauth
                    {{-- auth button {end} --}}




                    {{-- <div class="z-50 hidden my-4 text-base list-none bg-white divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                        id="dropdown-user">
                        <div class="px-4 py-3" role="none">
                            <p class="text-sm text-gray-900 dark:text-white" role="none">
                                Neil Sims
                            </p>
                            <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                neil.sims@flowbite.com
                            </p>
                        </div>
                        <ul class="py-1" role="none">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Dashboard</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Settings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Earnings</a>
                            </li>
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                    role="menuitem">Sign out</a>
                            </li>
                        </ul>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</nav>
