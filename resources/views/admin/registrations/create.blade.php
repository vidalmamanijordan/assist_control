@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
            {{-- Event title {start} --}}
            <div class="flex items-center justify-center h-24 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <label class="font-bold text-3xl">Evento:</label><label
                    class="font-normal text-3xl text-gray-500">&nbsp;{{ $eventName->name }}</label>
            </div>
            {{-- Event title {end} --}}

            {{-- dates {start} --}}
            <div class="grid grid-cols-2 gap-4 mb-4">
                <div class="flex items-center justify-center rounded bg-gray-50 h-16 dark:bg-gray-800">
                    <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span>
                        <span class="relative">Inicio:</span>
                    </span>
                    <label class="text-gray-400 text-sm">{{ $eventName->start_date }}</label>&nbsp;&nbsp;
                    <span class="relative inline-block px-3 py-1 font-semibold text-red-900 leading-tight">
                        <span aria-hidden class="absolute inset-0 bg-red-200 opacity-50 rounded-full"></span>
                        <span class="relative">Termino:</span>
                    </span>
                    <label class="text-gray-400 text-sm">{{ $eventName->end_date }}</label>
                </div>
                <div class="flex items-center justify-center rounded bg-gray-50 h-16 dark:bg-gray-800">
                    <label class="text-3xl font-medium" id="hora-actual"></label>
                    <script>
                        function mostrarHoraActual() {
                            const horaActualElement = document.getElementById('hora-actual');

                            function actualizarHora() {
                                const fecha = new Date();
                                const hora = fecha.getHours().toString().padStart(2, '0');
                                const minutos = fecha.getMinutes().toString().padStart(2, '0');
                                const segundos = fecha.getSeconds().toString().padStart(2, '0');
                                const horaActual = `${hora}:${minutos}:${segundos}`;
                                horaActualElement.textContent = horaActual;
                            }

                            // Actualiza la hora cada segundo
                            setInterval(actualizarHora, 1000);

                            // Muestra la hora actual al cargar la página
                            actualizarHora();
                        }

                        mostrarHoraActual();

                        /* Enfoque automático en el input al cargar la página */
                        document.addEventListener("DOMContentLoaded", function() {
                            document.getElementById("miInput").focus();
                        });
                    </script>
                </div>
            </div>
            {{-- dates {end} --}}

            {{-- search {start} --}}
            <div class=" items-center justify-center h-48 mb-4 rounded bg-gray-50 dark:bg-gray-800">
                <label class="font-bold flex items-center justify-center">Ingrese DNI ó Código</label>
                <div class="w-auto">
                    {!! Form::open([
                        'route' => ['adminregistrations.store', 'registration' => $registration],
                        'autocomplete' => 'off',
                    ]) !!}

                    {!! Form::label('default-search', 'Search', [
                        'class' => 'mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white',
                    ]) !!}
                    <div class="relative mt-2">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                            </svg>
                        </div>
                        {!! Form::text('search', null, [
                            'id' => 'miInput',
                            'class' =>
                                'w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        ]) !!}
                        @error('search')
                            <small>{{ $message }}</small>
                        @enderror
                        {!! Form::submit('Registrar', [
                            'id' => 'playBtn',
                            'class' =>
                                'text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800',
                        ]) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
                <div class="flex items-center justify-center mt-2">
                    <div
                        class="w-full max-w-md p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex items-center justify-between mb-4">
                            <h5 class="text-xl font-bold leading-none text-gray-900 dark:text-white">Último registro</h5>
                            <div class="flex">
                                <div class="text-blue-600 inline-flex items-center">
                                    <svg class="-ml-0.5 mr-2 h-3 w-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="currentColor" viewBox="0 0 20 14">
                                        <path
                                            d="M10 0C4.612 0 0 5.336 0 7c0 1.742 3.546 7 10 7 6.454 0 10-5.258 10-7 0-1.664-4.612-7-10-7Zm0 10a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                    </svg>
                                </div>
                                <a clas href="{{ route('adminassists.index') }}"
                                    class="text-sm font-medium text-blue-600 hover:underline dark:text-blue-500">
                                    Ver más
                                </a>
                            </div>
                        </div>
                        <div class="flow-root">
                            <ul role="list" class="divide-y divide-gray-200 dark:divide-gray-700">
                                <li class="py-3 sm:py-4">
                                    <div class="flex items-center space-x-4">
                                        <div class="flex-shrink-0">
                                            <img class="w-8 h-8 rounded-full" src="https://i.postimg.cc/KzNbbbRN/user.png"
                                                alt="user">
                                        </div>
                                        <div class="flex-1 min-w-0">
                                            @if ($ultimoRegistro && $ultimoRegistro->participant)
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    {{ $ultimoRegistro->participant->name }}
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    Último evento: <b>{{ $ultimoRegistro->event->name }}</b>
                                                </p>
                                            @else
                                                <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
                                                    No hay datos disponibles
                                                </p>
                                                <p class="text-sm text-gray-500 truncate dark:text-gray-400">
                                                    No hay datos disponibles
                                                </p>
                                            @endif
                                        </div>
                                        <div
                                            class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">

                                            {{-- {{ $assists->date  }}     --}}

                                            {{-- No hay Fecha registrado aún... --}}
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            {{-- search {end} --}}
        </div>
    </div>
@endsection

@section('js')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let audio;

            // Selecciona el sonido basado en el tipo de mensaje
            @if (session('message') === 'El usuario registró su asistencia')
                audio = new Audio('{{ asset('audios/success-6297.mp3') }}');
                audio.play();
            @elseif (session('not_found') === 'Dato no encontrado en nuestros registros')
                audio = new Audio('{{ asset('audios/error-126627.mp3') }}');
                audio.play();
            @elseif (session('warning') === 'Ingrese dato a buscar')
                audio = new Audio('{{ asset('audios/beep-warning-6387.mp3') }}');
                audio.play();
            @endif

            let playBtn = document.getElementById('playBtn');

            if (playBtn && audio) {
                playBtn.addEventListener('click', function () {
                    audio.play();

                    // Detener la reproducción después de 3 segundos
                    setTimeout(function () {
                        audio.pause();
                        audio.currentTime = 0;
                    }, 3000);
                });
            }
        });
    </script>
@endsection