@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-tents text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Información facultades</label>    
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                <a href="{{ route('adminfaculties.create') }}" class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-plus"></i></i>&nbsp;Nuevo
                </a>
            </div>
        </div>
        <br>
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <div class="relative overflow-auto shadow-md sm:rounded-lg">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">#</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Facultad</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Descripción</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Sede</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @php
                            $counter = 1;
                        @endphp

                        @foreach ($faculties as $faculty)
                            <tr class="hover:bg-gray-50">
                                <th class="px-6 py-4">
                                    {{ $counter++ }}
                                </th>
                                <td class="px-6 py-4">{{ $faculty->name }}</td>
                                <td class="px-6 py-4">{{ $faculty->description }}</td>
                                <td class="px-6 py-4">{{ $faculty->sede->name }}</td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        Activo
                                    </span>
                                </td>
                                <td class="px-6 py-4">
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
                                            <a href="{{ route('adminfaculties.edit', $faculty) }}" class="text-sky-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                    stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
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
                                            <form action="{{ route('adminfaculties.destroy', $faculty) }}" method="POST" class="formulario-eliminar">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="text-rose-600">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                        stroke-width="1.5" stroke="currentColor" class="h-6 w-6" x-tooltip="tooltip">
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
        </div>

        <div class="mt-2">
            {{ $faculties->links() }}
        </div>
    </div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    @if (Session('message') == 'Registro eliminado satisfactoriamente')
        <script>
            Swal.fire(
                    '¡Eliminado!',
                    'La facultad se eliminado con éxito.',
                    'success'
                    )
        </script>
    @endif
    <script>
        $('.formulario-eliminar').submit(function(e){ /* Capturo el evento en e */
            e.preventDefault();  /* Detengo el envio del formulario */

            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡Esta facultad se eliminará definitivamente!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '¡Si, eliminar!',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    this.submit();
                }
            })
        })
    </script>
@endsection
