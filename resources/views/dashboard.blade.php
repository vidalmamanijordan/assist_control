<x-app-layout>
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 grid grid-cols-5">
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
    </div>
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
