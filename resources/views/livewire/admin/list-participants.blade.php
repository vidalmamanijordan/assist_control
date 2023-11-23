<div class="p-4 sm:ml-64">
    <div class="grid grid-cols-3 gap-4 mt-14">
        <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
            <span class="text_midnight_blue ml-4">
                <i class="fa-solid fa-people-group text-2xl"></i>
            </span>
            <label class="ml-4 font-bold">Información participantes</label>    
        </div>
        <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
            <a href="{{ route('adminparticipants.create') }}" class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                <i class="fa-solid fa-plus"></i></i>&nbsp;Nuevo
            </a>
            <a href="{{ route('adminparticipants.import') }}" class=" ml-2 bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                <i class="fa-solid fa-file-arrow-up"></i>&nbsp;Importar
            </a>
            <a href="{{ route('adminparticipants.export') }}" class=" ml-2 bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                <i class="fa-regular fa-file-excel"></i>&nbsp;Exportar
            </a>
        </div>
    </div>

    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
        <form class="flex items-center">
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input wire:model="search" type="text" id="simple-search"
                       class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                       placeholder="Buscar..." required>
            </div>
            <button type="submit" class="mt-2 ml-1 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                Limpiar
            </button>
        </form><br>
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                <tr class="text_midnight_blue font-bold">
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>DNI</th>
                    <th>Código</th>
                    <th>Telefono</th>
                    <th>Email</th>
                    <th>Carrera</th>
                    <th>Ciclo</th>
                    <th>Grupo</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($participants as $participant)
                    <tr>
                        <th scope="row"
                            class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                            {{ $participant->id }}
                        </th>
                        <td class="px-6 py-4">
                            {{ $participant->name }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $participant->dni }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $participant->code }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $participant->phone }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $participant->email }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $participant->career->name }}
                        </td>
                        <td class="px-6 py-4">
                            {{ $participant->semester }}
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            {{ $participant->group }}
                        </td>
                        <td class="px-6 py-4">
                            @if ($participant->status === 1)
                                <i class="fa-regular fa-circle-check text-lime-500"></i>
                            @else
                                <i class="fa-regular fa-circle-xmark text-rose-600"></i>
                            @endif
                        </td>
                        <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                            <div class="flex justify-center gap-4">
                                <div class="
                                            relative
                                            before:content-[attr(data-tipe)]
                                            before:absolute
                                            before:px-2.5 before:py-2.5>
                                            before:left-1/2 before:-top-2.5
                                            before:w-max before:max-w-xs
                                            before:-translate-x-1/2 before:-translate-y-full
                                            before:bg-gray-700 before:text-white
                                            before:rounded-md before:opacity-0
                                            before:transition-all

                                            after:absolute
                                            after:left-1/2 after:-top-3
                                            after:h-0 after:w-0
                                            after:-translate-x-1/2 after:border-8
                                            after:border-t-gray-700
                                            after:border-l-transparent
                                            after:border-b-transparent
                                            after:border-r-transparent
                                            after:opacity-0
                                            after:translate-all

                                            hover:before:opacity-100 hover:after:opacity-100
                                            "
                                    data-tipe="Editar">
                                    <a href="{{ route('adminparticipants.edit', $participant) }}" class="text-sky-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                            x-tooltip="tooltip">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L6.832 19.82a4.5 4.5 0 01-1.897 1.13l-2.685.8.8-2.685a4.5 4.5 0 011.13-1.897L16.863 4.487zm0 0L19.5 7.125" />
                                        </svg>
                                    </a>
                                </div>
                                <div class="
                                            relative
                                            before:content-[attr(data-tipe)]
                                            before:absolute
                                            before:px-2.5 before:py-2.5>
                                            before:left-1/2 before:-top-2.5
                                            before:w-max before:max-w-xs
                                            before:-translate-x-1/2 before:-translate-y-full
                                            before:bg-gray-700 before:text-white
                                            before:rounded-md before:opacity-0
                                            before:transition-all

                                            after:absolute
                                            after:left-1/2 after:-top-3
                                            after:h-0 after:w-0
                                            after:-translate-x-1/2 after:border-8
                                            after:border-t-gray-700
                                            after:border-l-transparent
                                            after:border-b-transparent
                                            after:border-r-transparent
                                            after:opacity-0
                                            after:translate-all

                                            hover:before:opacity-100 hover:after:opacity-100
                                            "
                                    data-tipe="Eliminar">
                                    <form action="{{ route('adminparticipants.destroy', $participant) }}"
                                        method="POST" class="formulario-eliminar">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="text-rose-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke-width="1.5" stroke="currentColor" class="h-6 w-6"
                                                x-tooltip="tooltip">
                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                    d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @if ($participants->count())
        <div class="mt-2">
            {{ $participants->links() }}
        </div>
    @else
        <div class="text-center mt-2">
            <strong>No hay ningún registro coincidente</strong>
        </div>
    @endif
</div>