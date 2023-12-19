@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-users text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Editando...</label>&nbsp;&nbsp;|&nbsp;&nbsp;
                <label class="ml-4 font-bold">Usuario:</label>&nbsp;<label class="text-gray-500">{{ $user->name }}</label>
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                {{-- <label class="mr-12 font-bold">Total: {{ $total }}</label> --}}
                <a href="{{ route('adminusers.index') }}"
                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-arrow-left"></i>Volver
                </a>
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
            {!! Form::model($user, ['route' => ['adminusers.update', $user], 'method' => 'put']) !!}
            <div class="grid gap-6 mb-6 md:grid-cols-2">
                <div>
                    {!! Form::label('name', 'Nombre', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::text('name', null, [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                    ]) !!}
                    @error('name')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('dni', 'Dni', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::number('dni', null, [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                    ]) !!}
                    @error('name')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('phone', 'Teléfono', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::number('phone', null, [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                    ]) !!}
                    @error('name')
                        <small class="text-xs text-red-500">{{ $message }}</small>
                    @enderror
                </div>
                <div>
                    {!! Form::label('email', 'Correo electrónico', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::email('email', $user->email, [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                    ]) !!}
                </div>
                <div>
                    {!! Form::label('password', 'Nueva Contraseña', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::password('password', [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                        'placeholder' => '********',
                    ]) !!}
                </div>
                <div>
                    {!! Form::label('password_confirmation', 'Confirmar Contraseña', [
                        'class' => 'text-left block mb-2 text-sm font-medium text-gray-900 dark:text-white',
                    ]) !!}
                    {!! Form::password('password_confirmation', [
                        'class' =>
                            'bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500',
                        'required' => 'required',
                        'placeholder' => '********',
                    ]) !!}
                </div>
            </div>
            {!! Form::submit('Actualizar', [
                'class' => 'cursor-pointer mb-6 float-right bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium',
            ]) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection
