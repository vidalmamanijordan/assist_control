@extends('dashboard')

@section('work_area')
    {{-- <div
        class="w-full p-4 text-center bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700 col-span-4 ">
        <h5 class="mb-2 text-3xl font-bold text-gray-900 dark:text-white">Cambiar contraseña de: <label class="font-light">
                {{ $user->name }}</label></h5>
        <hr class="mt-6 mb-6">
        <br>
        {!! Form::open(['route' => ['adminusers.reset-password', $user], 'method' => 'put']) !!}
            <div class="relative z-0 w-full mb-6 group">
                {!! Form::password('password', [
                    'id' => 'password',
                    'class' =>
                        'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer',
                    'placeholder' => ' ',
                    'required' => 'required',
                ]) !!}
                {!! Form::label('password', 'Nueva Contraseña', [
                    'class' =>
                        'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6',
                ]) !!}
                @error('password')
                    <Small class="text-red-500">{{ $message }}</Small>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                {!! Form::password('password_confirmation', [
                    'id' => 'password_confirmation',
                    'class' =>
                        'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer',
                    'placeholder' => ' ',
                    'required' => 'required',
                ]) !!}
                {!! Form::label('password_confirmation', 'Confirmar Contraseña', [
                    'class' =>
                        'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6',
                ]) !!}
                @error('password_confirmation')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::submit('Actualizar contraseña', [
                    'class' =>
                        'cursor-pointer mb-6 float-right text-white bg-[#050708] hover:bg-[#050708]/90 focus:ring-4 focus:outline-none focus:ring-[#050708]/50 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:focus:ring-[#050708]/50 dark:hover:bg-[#050708]/30 mr-2',
                ]) !!}
            </div>
        {!! Form::close() !!}
    </div> --}}
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-users text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Cambiando contraseña...</label>&nbsp;&nbsp;|&nbsp;&nbsp;
                <label class="ml-4 font-bold">Para:</label>&nbsp;<label class="text-gray-500">{{ $user->name }}</label>
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                <a href="{{ route('adminusers.index') }}"
                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-arrow-left"></i>Volver
                </a>
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
            {!! Form::open(['route' => ['adminusers.reset-password', $user], 'method' => 'put']) !!}
            <div class="relative z-0 w-full mb-6 group">
                {!! Form::password('password', [
                    'id' => 'password',
                    'class' =>
                        'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer',
                    'placeholder' => ' ',
                    'required' => 'required',
                ]) !!}
                {!! Form::label('password', 'Nueva Contraseña', [
                    'class' =>
                        'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6',
                ]) !!}
                @error('password')
                    <Small class="text-red-500">{{ $message }}</Small>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                {!! Form::password('password_confirmation', [
                    'id' => 'password_confirmation',
                    'class' =>
                        'block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer',
                    'placeholder' => ' ',
                    'required' => 'required',
                ]) !!}
                {!! Form::label('password_confirmation', 'Confirmar Contraseña', [
                    'class' =>
                        'peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6',
                ]) !!}
                @error('password_confirmation')
                    <small class="text-red-500">{{ $message }}</small>
                @enderror
            </div>
            <div>
                {!! Form::submit('Actualizar contraseña', [
                    'class' =>
                        'cursor-pointer mb-6 float-right bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium',
                ]) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
