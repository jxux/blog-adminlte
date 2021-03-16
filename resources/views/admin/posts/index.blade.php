@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>listado pots</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong> {{ session('info') }}</strong>
        </div>
    @endif

    @livewire('admin.post-index')

@stop
