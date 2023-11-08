@extends('dashboard')

@section('work_area')
    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center justify-center">
            <span class="mr-5 text_midnight_blue">
                <i class="fa-solid fa-city text-4xl"></i>
            </span>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Nueva Carrera Profesional</h5>
            <div class="ml-auto">
                <a href="{{ route('admincareers.index') }}"
                    class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <hr class="mt-6 mb-6">
        {!! Form::open(['route' => 'admincareers.store', 'autocomplete' => 'off']) !!}
            <div class="grid mb-6 gap-6 md:grid-cols-2">
                <div>
                    {!! Form::label('name', 'Nombre', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::text('name', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('description', 'Descripción', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::textarea('description', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('description')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('faculty_id', 'Elija Facultad', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::select('faculty_id', $faculties, null, ['class' => 'block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                    @error('faculy_id')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {!! Form::submit('Crear Carrera', ['class' => 'cursor-pointer mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2']) !!}
        {!! Form::close() !!}
    </div>
@endsection
