@extends('dashboard')

@section('work_area')
    <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center justify-center">
            <span class="mr-5 text_midnight_blue">
                <i class="fa-solid fa-building text-4xl"></i>
            </span>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Editar Facultad: <label class="text-gray-500 font-light">{{ $faculty->name }}</label></h5>
            <div class="ml-auto">
                <a href="{{ route('adminfaculties.index') }}"
                    class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <hr class="mb-6 mt-6">
        {!! Form::model($faculty, ['route' => ['adminfaculties.update', $faculty], 'method' => 'put']) !!}
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    {!! Form::label('name', 'Nombre', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::text('name', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('description', 'Description', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::textarea('description', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('description')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('sede', 'Elije Sede', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::select('sede_id', $sedes, null, ['class' => 'block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer']) !!}
                    @error('record')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
            </div>
            {!! Form::submit('Actualizar facultad', ['class' => 'cursor-pointer mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2' ]) !!}
        {!! Form::close() !!}
    </div>
@endsection
