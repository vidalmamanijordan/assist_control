@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-users text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Información usuarios</label>    
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                <label class="mr-12 font-bold">Total: {{ $total }}</label>
                <a href="{{ route('adminusers.create') }}" class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
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
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Nombres</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Dni</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Teléfono</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">E-mail</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900">Estado</th>
                            <th scope="col" class="px-6 py-4 font-medium text-gray-900"></th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-100 border-t border-gray-100">
                        @php
                            $counter = 1;
                        @endphp

                        @foreach ($users as $user)
                            <tr class="hover:bg-gray-50">
                                <th class="px-6 py-4">
                                    {{ $counter++ }}
                                </th>
                                <td class="px-6 py-4">{{ $user->name }}</td>
                                <td class="px-6 py-4">{{ $user->dni }}</td>
                                <td class="px-6 py-4">{{ $user->phone }}</td>
                                <td class="px-6 py-4">{{ $user->email }}</td>
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
                                        <a href="{{ route('adminusers.edit', $user) }}" class="text-sky-400">
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
                                        data-tipe="Cambiar contraseña">
                                        <a href="{{ route('adminusers.reset-password', $user) }}" class="text-rose-600">
                                            <i class="fa-solid fa-lock"></i>
                                        </a>
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
            {{ $users->links() }}
        </div>
    </div>
@endsection
