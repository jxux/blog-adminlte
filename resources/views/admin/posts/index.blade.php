@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>listado pots</h1>
@stop

@section('content')

    @livewire('admin.post-index')

@stop
