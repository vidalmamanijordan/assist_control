
<div class="p-4 sm:ml-64">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-14">
        <div class="flex items-center justify-center h-12 mb-4 rounded bg-gray-50 dark:bg-gray-800">
            <i class="fa-solid fa-chart-simple text-rose-500 text-lg"></i>&nbsp;<label class="font-bold">Reportes</label>
        </div>
        <div class="grid grid-cols-3 gap-4 mb-4">
            <div class="flex items-center justify-center h-14 rounded bg-gray-50 dark:bg-gray-800">
                <div>
                    Evento:
                    <select wire:model="filters.event_id" name="event"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm">
                        <option value="">Todos</option>
                        @foreach ($events as $event)
                            <option value="{{ $event->id }}">{{ $event->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-center h-14 rounded bg-gray-50 dark:bg-gray-800">
                <div>
                    Carrera:
                    <select wire:model="filters.career" name=""
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm">
                        <option value="">Todos</option>
                        @foreach ($careers as $career)
                            <option value="{{ $career->name }}">{{ $career->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="flex items-center justify-center h-14 rounded bg-gray-50 dark:bg-gray-800">
                <div class="mt-1">
                    <label class="mr-12 font-bold">Total: <span class="font-light">{{ $total }}</span></label>
                    <button wire:click="generateReport"
                        class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                        <i class="fa-solid fa-file-excel"></i>&nbsp;Exportar en Excel
                    </button>
                    <a href="{{ route('adminassists.pdf') }}" target="_blank"
                        class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                        <i class="fa-solid fa-file-pdf"></i>&nbsp;Exportar en PDF
                    </a>
                </div>
            </div>
        </div>
        <div>
            <form class="flex items-center">
                <div class="flex items-center justify-center mr-2">
                    <span>Mostrar</span>
                    <select wire:model="cant"
                        class="mx-2 border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm text-sm">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                    <span>Entradas.</span>
                </div>
                <label for="simple-search" class="sr-only">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                        </svg>
                    </div>
                    <input wire:model="search" type="text" id="simple-search"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        placeholder="Buscar..." required>
                </div>
                <button type="submit"
                    class="mt-2 ml-1 text-white bg-gradient-to-r from-blue-500 via-blue-600 to-blue-700 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">
                    Limpiar
                </button>
            </form>
        </div>
        <div class="overflow-hidden rounded-lg border border-gray-200 shadow-md">
            <div class="relative overflow-auto shadow-md sm:rounded-lg">
                <table class="w-full border-collapse bg-white text-left text-sm text-gray-500">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 cursor-pointer"
                                wire:click="order('id')">
                                ID
                                @if ($sort == 'id')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 cursor-pointer"
                                wire:click="order('code')">
                                Código
                                @if ($sort == 'code')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 cursor-pointer"
                                wire:click="order('participant_id')">
                                Participante
                                @if ($sort == 'participant_id')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 cursor-pointer"
                                wire:click="order('event_id')">
                                Evento
                                @if ($sort == 'event_id')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900 cursor-pointer"
                                wire:click="order('career')">
                                Carrera Profesional
                                @if ($sort == 'career')
                                    @if ($direction == 'asc')
                                        <i class="fa-solid fa-sort-alpha-up-alt float-right mt-1"></i>
                                    @else
                                        <i class="fa-solid fa-sort-alpha-down-alt float-right mt-1"></i>
                                    @endif
                                @else
                                    <i class="fa-solid fa-sort"></i>
                                @endif
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                                Ciclo
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">
                                Grupo
                            </th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Fecha</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Usuario <label
                                    class="text-sm font-thin">(registrador)</label></th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @foreach ($assits as $assit)
                            <tr class="hover:bg-gray-50">
                                <th class="px-6 py-4">{{ $assit->id }}</th>
                                <td>{{ $assit->code }}</td>
                                <td class="flex gap-3 px-6 py-4 font-normal text-gray-900">
                                    <div class="relative h-10 w-10">
                                        <img class="h-full w-full rounded-full object-cover object-center"
                                            src="https://images.unsplash.com/photo-1535713875002-d1d0cf377fde?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                            alt="" />
                                        <span
                                            class="absolute right-0 bottom-0 h-2 w-2 rounded-full bg-green-400 ring ring-white"></span>
                                    </div>
                                    <div class="text-sm">
                                        <div class="font-medium text-gray-700">{{ $assit->participant->name }}</div>
                                        <div class="text-gray-400">{{ $assit->participant->email }}</div>
                                    </div>
                                </td>
                                <td class="px-6 py-4">{{ $assit->event->name }}</td>
                                <td class="px-6 py-4">{{ $assit->career }}</td>
                                <td class="px-6 py-4">{{ $assit->semester }}</td>
                                <td class="px-6 py-4">{{ $assit->group }}</td>
                                <td class="px-6 py-4">
                                    <div class="flex gap-2">
                                        <span
                                            class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600 text-center">
                                            {{ $assit->date }}
                                        </span>
                                    </div>
                                </td>
                                <td class="px-6 py-4">
                                    {{ $assit->user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    <span
                                        class="inline-flex items-center gap-1 rounded-full bg-green-50 px-2 py-1 text-xs font-semibold text-green-600">
                                        <span class="h-1.5 w-1.5 rounded-full bg-green-600"></span>
                                        Active
                                    </span>
                                </td>

                                <td class="px-6 py-4">
                                    <div class="flex justify-end gap-4">
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
                                            <a x-data="{ tooltip: 'Edite' }" href="#" class="text-sky-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-6 w-6" x-tooltip="tooltip">
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
                                            <a x-data="{ tooltip: 'Delete' }" href="#" class="text-rose-400">
                                                <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                    class="h-6 w-6" x-tooltip="tooltip">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                                </svg>
                                            </a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            @if ($assits->hasPages())
                <div class="m-3">
                    {{ $assits->links() }}
                </div>
            @endif
        </div>
    </div>
</div>
