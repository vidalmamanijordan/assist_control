@extends('dashboard')

@section('work_area')
    <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center justify-center">
            <h1 class="text-2xl font-semibold mb-4 flex-grow">Por favor seleccione el archivo a Importar</h1>
            <div class="ml-auto">
                <a href="{{ route('adminparticipants.index') }}" class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <hr class="mt-6 mb-6">
        <form action="{{ route('adminparticipants.importStore') }}" 
            method="POST"
            enctype="multipart/form-data">
            @csrf
            <div class="">
                <input type="file" name="file" accept=".csv, .xlsx">
            </div>
            @error('file')
                <p class="text-red-500">{{ $message }}</p>
            @enderror
            <button type="submit"
                class="mt-4 inline-flex items-center px-5 py-2.5 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <i class="fa-solid fa-upload"></i>&nbsp;Importar archivo
            </button>
        </form>
    </div>
@endsection
