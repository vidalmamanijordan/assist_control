@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-users text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Seleccion archivo a importar</label>
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                <a href="{{ route('adminparticipants.index') }}"
                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-arrow-left"></i>Volver
                </a>
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
            <div class="flex justify-center">
                <form action="{{ route('adminparticipants.importStore') }}" method="POST" enctype="multipart/form-data">
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
            <hr class="mt-4 mb-4">
            <div class="flex justify-center items-center">
                <figure
                    class="relative max-w-sm transition-all duration-300 cursor-pointer filter grayscale hover:grayscale-0">
                    <a href="#">
                        <img class="rounded-lg"
                            src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/content/content-gallery-3.png"
                            alt="image description">
                    </a>
                    <figcaption class="absolute px-4 text-lg text-white bottom-6">
                        <p>Importar nuevo(s) participantes por Excel!.</p>
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>
@endsection
