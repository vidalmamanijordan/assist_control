@extends('dashboard')

@section('work_area')
    <div
        class="w-full p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4">
        <div class="flex items-center justify-center">
            <span class="mr-5 text_midnight_blue">
                <i class="fa-solid fa-users text-4xl"></i>
            </span>
            <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Nuevo Usuario</h5>
            <div class="ml-auto">
                <a href="{{ route('adminusers.index') }}"
                    class="cursor-pointer text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center mr-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    <i class="fa-solid fa-arrow-left"></i>
                </a>
            </div>
        </div>
        <div class="text-center">
            <hr class="mt-6 mb-6">
        </div>
        {!! Form::open(['route' => 'adminusers.store', 'autocomplete' => 'off']) !!}
        <div class="grid gap-6 mb-6 md:grid-cols-2">
            <div>
                {!! Form::label('name', 'Nombres', [
                    'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                ]) !!}
                {!! Form::text('name', null, [
                    'class' =>
                        'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                    'required' => 'required',
                ]) !!}
                @error('name')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::label('email', 'Correo electrónico', [
                    'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                ]) !!}
                {!! Form::email('email', '@upeu.edu.pe', [
                    'class' =>
                        'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                    'required' => 'required',
                ]) !!}
                @error('email')
                    <small>{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::label('password', 'Contraseña', [
                    'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white']) !!}
                {!! Form::password('password', [
                    'class' =>
                        'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                    'required' => 'required', 'placeholder' => '*********'
                ]) !!}
                @error('password')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::label('password_confirmation', 'Confirmar contraseña', [
                    'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                ]) !!}
                {!! Form::password('password_confirmation', [
                    'class' =>
                        'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                    'required' => 'required', 'placeholder' => '*********'
                ]) !!}
                @error('password_confirmation')
                    <small class="text-xs text-red-500">{{ $message }}</small>
                @enderror
            </div>
        </div>
        {!! Form::submit('Crear usuario', [
            'class' =>
                'cursor-pointer mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2',
        ]) !!}
        {!! Form::close() !!}
    </div>
@endsection
