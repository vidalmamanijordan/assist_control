@extends('dashboard')

@section('work_area')
    @livewire('admin.list-registers', ['events' => $events, 'careers' => $careers])    
@endsection
