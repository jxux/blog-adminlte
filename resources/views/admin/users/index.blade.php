@extends('adminlte::page')

@section('title', 'Users')

@section('content_header')
    <h1>Lista de usuarios</h1>
@stop

@section('content')
    @livewire('admin.user-index')
@stop

@section('css')
    
@stop

@section('js')
    
@stop