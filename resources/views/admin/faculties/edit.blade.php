@extends('dashboard')

@section('work_area')
    <div class="p-4 sm:ml-64">
        <div class="grid grid-cols-3 gap-4 mt-14">
            <div class="flex items-center h-12 rounded bg-gray-50 dark:bg-gray-800 col-span-2">
                <span class="text_midnight_blue ml-4">
                    <i class="fa-solid fa-tents text-2xl"></i>
                </span>
                <label class="ml-4 font-bold">Editando...</label>&nbsp;&nbsp;|&nbsp;&nbsp;
                <label class="ml-4 font-bold">Facultad:</label>&nbsp;<label class="text-gray-500">{{ $faculty->name }}</label>
            </div>
            <div class="flex items-center justify-center h-12 rounded bg-gray-50 dark:bg-gray-800">
                {{-- <label class="mr-12 font-bold">Total: {{ $total }}</label> --}}
                <a href="{{ route('adminfaculties.index') }}"
                    class="bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium">
                    <i class="fa-solid fa-arrow-left"></i>Volver
                </a>
            </div>
        </div>

        <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700 mt-2">
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
            {!! Form::submit('Actualizar facultad', ['class' => 'cursor-pointer mb-6 float-right bg-sky-800 text-white rounded-md px-3 py-2 text-sm font-medium' ]) !!}
        {!! Form::close() !!}
        </div>
    </div>
@endsection
