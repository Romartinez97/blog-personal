@extends('layouts.app')

@section('title', 'Página principal')

@section('content')
    <h1>Página principal</h1>

    <x-alert type="danger">
        <x-slot name="title">
            ¡Cuidado!
        </x-slot>
        Contenido de la alerta
    </x-alert>
@endsection
