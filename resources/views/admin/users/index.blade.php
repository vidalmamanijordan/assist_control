@extends('dashboard')

@section('work_area')
    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center">
            <span class="mr-5 text_midnight_blue">
                <i class="fa-solid fa-users text-4xl"></i>
            </span>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Información Usuarios</h5>
            <div class="ml-auto">
                <a href="{{ route('dashboard') }}"
                    class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="flow-root mt-6">
            <a href="{{ route('adminusers.create') }}"
            class="mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2">
            <i class="fa-solid fa-user-plus"></i>&nbsp;Nuevo
        </a>
        </div>
        <hr class="mb-6">
        <div class="relative overflow-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase dark:text-gray-400">
                    <tr class="text_midnight_blue font-bold">
                        <th>ID</th>
                        <th>Nombres</th>
                        <th>Correos</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap bg-gray-50 dark:text-white dark:bg-gray-800">
                                {{ $user->id }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $user->name }}
                            </td>
                            <td class="px-6 py-4 bg-gray-50 dark:bg-gray-800">
                                {{ $user->email }}
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
        <div class="mt-2">
            {{ $users->links() }}
        </div>
    </div>
@endsection
