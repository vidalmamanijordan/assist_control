@extends('dashboard')

@section('work_area')
    {{-- <div class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center justify-center">
            <span class="mr-5 text_midnight_blue">
                <i class="fa-solid fa-building text-4xl"></i>
            </span>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white0">Editar Sede: <label class="text-gray-500 font-light">{{ $sede->name }}</label></h5>
            <div class="ml-auto">
                <a href="{{ route('adminsedes.index') }}"
                    class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <hr class="mb-6 mt-6">
        {!! Form::model($sede, ['route' => ['adminsedes.update', $sede], 'method' => 'put']) !!}
            <div class="grid mb-6">
                <div>
                    {!! Form::label('name', 'Nombre', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::text('name', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mt-6">
                    {!! Form::label('description', 'Descripción', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::textarea('description', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required', 'placeholder' => 'Escriba una descripción...']) !!}
                </div>
            </div>
            {!! Form::submit('Actualizar sede', ['class' => 'cursor-pointer mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2', 'required' => 'required']) !!}
        {!! Form::close() !!}
    </div> --}}

    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-building text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Editando...</label>&nbsp;&nbsp;|&nbsp;&nbsp;
                <label class="ml-4 font-bold">Sede:</label>&nbsp;<label class="text-gray-500">{{ $sede->name }}</label>
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                <a href="{{ route('adminsedes.index') }}"
                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-arrow-left"></i>Volver
                </a>
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
            {!! Form::model($sede, ['route' => ['adminsedes.update', $sede], 'method' => 'put']) !!}
            <div class="grid mb-6">
                <div>
                    {!! Form::label('name', 'Nombre', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::text('name', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required']) !!}
                    @error('name')
                        <small>{{ $message }}</small>
                    @enderror
                </div>
                <div class="mt-6">
                    {!! Form::label('description', 'Descripción', ['class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                    {!! Form::textarea('description', null, ['class' => 'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500', 'required' => 'required', 'placeholder' => 'Escriba una descripción...']) !!}
                </div>
            </div>
            {!! Form::submit('Actualizar sede', ['class' => 'cursor-pointer mb-6 float-right bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium', 'required' => 'required']) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection
