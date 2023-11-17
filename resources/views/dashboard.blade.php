<x-app-layout>
    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-5">
        <aside class="bg-gray-800 text-white w-64 min-h-screen p-4">
            <nav>
                <h1 class="font-bold text-lg mb-4">Dashboard</h1>
                <ul class="text-sm text-slate-200 space-y-2">
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-users mr-2"></i>
                                <span>Usuarios</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('adminusers.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista usuarios
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminusers.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear usuario
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-building mr-2"></i>
                                <span>Sedes</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('adminsedes.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista sedes
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminsedes.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear sede
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-tents mr-2"></i>
                                <span>Facultades</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('adminfaculties.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista facultades
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminfaculties.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear facultad
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-city mr-2"></i>
                                <span>Escuelas profesionales</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('admincareers.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista E.P's.
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('admincareers.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear Escuela Profesional
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-people-group mr-2"></i>
                                <span>Participantes</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('adminparticipants.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista participantes
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminparticipants.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear participante
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminparticipants.import') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Importar participante
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <i class="fa-solid fa-calendar-check mr-2"></i>
                                <span>Eventos</span>
                            </div>
                            <i class="fas fa-chevron-down text-xs"></i>
                        </div>
                        <ul class="desplegable ml-4 hidden">
                            <li>
                                <a href="{{ route('adminevents.index') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Lista eventos
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('adminevents.create') }}"
                                    class="p-2 hover:bg-gray-700 flex items-center">
                                    <i class="fas fa-chevron-right mr-2 text-xs"></i>
                                    Crear evento
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <a href="{{ route('adminregistrations.index') }}">
                                    <i class="fa-solid fa-clipboard-user mr-2"></i>
                                    <span>Asistencia</span>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="opcion-con-desplegable cursor-pointer">
                        <div class="flex items-center justify-between p-2 hover:bg-gray-700">
                            <div class="flex items-center">
                                <a href="{{ route('adminassists.index') }}">
                                    <i class="fa-solid fa-address-card mr-2"></i>
                                    <span>Registros</span>
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
            <a href="{{ route('adminhelp.index') }}" class="absolute w-full bottom-0 text-white  justify-center py-4">
                <i class="fa-regular fa-circle-question"></i>
                Ayuda
            </a>
        </aside>
        @yield('work_area')
    </div> --}}

    <aside id="logo-sidebar"
        class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 sm:translate-x-0 dark:bg-gray-800 dark:border-gray-700"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
            <ul class="space-y-2 font-medium">
                {{-- dashboard {start} --}}
                <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 21">
                            <path
                                d="M16.975 11H10V4.025a1 1 0 0 0-1.066-.998 8.5 8.5 0 1 0 9.039 9.039.999.999 0 0 0-1-1.066h.002Z" />
                            <path
                                d="M12.5 0c-.157 0-.311.01-.565.027A1 1 0 0 0 11 1.02V10h8.975a1 1 0 0 0 1-.935c.013-.188.028-.374.028-.565A8.51 8.51 0 0 0 12.5 0Z" />
                        </svg>
                        <span class="ms-3">Dashboard</span>
                    </a>
                </li>
                {{-- dashboard {end} --}}

                {{-- Users {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-user-group text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Usuarios</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('adminusers.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista usuarios</a>
                        </li>
                        <li>
                            <a href="{{ route('adminusers.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear usuario</a>
                        </li>
                    </ul>
                </li>
                {{-- Users {end} --}}

                {{-- Sedes {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-building text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Sedes</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('adminsedes.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista sedes</a>
                        </li>
                        <li>
                            <a href="{{ route('adminsedes.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear sede</a>
                        </li>
                    </ul>
                </li>
                {{-- Sedes {end} --}}

                {{-- Faculties {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-tents text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Facultades</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('adminfaculties.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista sedes</a>
                        </li>
                        <li>
                            <a href="{{ route('adminfaculties.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear sede</a>
                        </li>
                    </ul>
                </li>
                {{-- Faculties {end} --}}

                {{-- Careers {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-city text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Carreras</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('admincareers.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista carreras</a>
                        </li>
                        <li>
                            <a href="{{ route('admincareers.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear carrera</a>
                        </li>
                    </ul>
                </li>
                {{-- Careers {end} --}}

                {{-- Participants {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-people-group text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Participantes</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('adminparticipants.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista participantes</a>
                        </li>
                        <li>
                            <a href="{{ route('adminparticipants.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear participante</a>
                        </li>
                        <li>
                            <a href="{{ route('adminparticipants.import') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Importar</a>
                        </li>
                    </ul>
                </li>
                {{-- Participants {end} --}}

                {{-- Events {start} --}}
                <li x-data="{ open: false }">
                    <button x-on:click="open=true" type="button"
                        class="flex items-center w-full p-2 text-base text-gray-900 transition duration-75 rounded-lg group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700"
                        aria-controls="dropdown-example" data-collapse-toggle="dropdown-example">
                        <i class="fa-solid fa-calendar-check text-gray-500"></i>
                        <span class="flex-1 ms-3 text-left rtl:text-right whitespace-nowrap">Eventos</span>
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>
                    <ul x-show="open" x-on:click.away="open=false" id="dropdown-example" class="py-2 space-y-2">
                        <li>
                            <a href="{{ route('adminevents.index') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Lista eventos</a>
                        </li>
                        <li>
                            <a href="{{ route('adminevents.create') }}"
                                class="flex items-center w-full p-2 text-gray-900 transition duration-75 rounded-lg pl-11 group hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">Crear evento</a>
                        </li>
                    </ul>
                </li>
                {{-- Events {end} --}}

                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path
                                d="m17.418 3.623-.018-.008a6.713 6.713 0 0 0-2.4-.569V2h1a1 1 0 1 0 0-2h-2a1 1 0 0 0-1 1v2H9.89A6.977 6.977 0 0 1 12 8v5h-2V8A5 5 0 1 0 0 8v6a1 1 0 0 0 1 1h8v4a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1v-4h6a1 1 0 0 0 1-1V8a5 5 0 0 0-2.582-4.377ZM6 12H4a1 1 0 0 1 0-2h2a1 1 0 0 1 0 2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sedes</span>
                        <span
                            class="inline-flex items-center justify-center w-3 h-3 p-3 ms-3 text-sm font-medium text-blue-800 bg-blue-100 rounded-full dark:bg-blue-900 dark:text-blue-300">3</span>
                    </a>
                </li> --}}
                
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

                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 18 20">
                            <path
                                d="M17 5.923A1 1 0 0 0 16 5h-3V4a4 4 0 1 0-8 0v1H2a1 1 0 0 0-1 .923L.086 17.846A2 2 0 0 0 2.08 20h13.84a2 2 0 0 0 1.994-2.153L17 5.923ZM7 9a1 1 0 0 1-2 0V7h2v2Zm0-5a2 2 0 1 1 4 0v1H7V4Zm6 5a1 1 0 1 1-2 0V7h2v2Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Products</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign In</span>
                    </a>
                </li> --}}
                {{-- <li>
                    <a href="#"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                            aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
                            viewBox="0 0 20 20">
                            <path d="M5 5V.13a2.96 2.96 0 0 0-1.293.749L.879 3.707A2.96 2.96 0 0 0 .13 5H5Z" />
                            <path
                                d="M6.737 11.061a2.961 2.961 0 0 1 .81-1.515l6.117-6.116A4.839 4.839 0 0 1 16 2.141V2a1.97 1.97 0 0 0-1.933-2H7v5a2 2 0 0 1-2 2H0v11a1.969 1.969 0 0 0 1.933 2h12.134A1.97 1.97 0 0 0 16 18v-3.093l-1.546 1.546c-.413.413-.94.695-1.513.81l-3.4.679a2.947 2.947 0 0 1-1.85-.227 2.96 2.96 0 0 1-1.635-3.257l.681-3.397Z" />
                            <path
                                d="M8.961 16a.93.93 0 0 0 .189-.019l3.4-.679a.961.961 0 0 0 .49-.263l6.118-6.117a2.884 2.884 0 0 0-4.079-4.078l-6.117 6.117a.96.96 0 0 0-.263.491l-.679 3.4A.961.961 0 0 0 8.961 16Zm7.477-9.8a.958.958 0 0 1 .68-.281.961.961 0 0 1 .682 1.644l-.315.315-1.36-1.36.313-.318Zm-5.911 5.911 4.236-4.236 1.359 1.359-4.236 4.237-1.7.339.341-1.699Z" />
                        </svg>
                        <span class="flex-1 ms-3 whitespace-nowrap">Sign Up</span>
                    </a>
                </li> --}}
            </ul>
        </div>
    </aside>
    @yield('work_area')
</x-app-layout>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const opcionesConDesplegable = document.querySelectorAll(".opcion-con-desplegable");
        opcionesConDesplegable.forEach(function(opcion) {
            opcion.addEventListener("click", function() {
                const desplegable = opcion.querySelector(".desplegable");
                desplegable.classList.toggle("hidden");
            });
        });
    });
</script>
