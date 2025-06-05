@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1>Welcome to the homepage!</h1>
    <x-alert type="danger">
        <x-slot name="title">
            ¡Cuidado!
        </x-slot>
        Contenido de la alerta
        <x-alert />
    @endsection
