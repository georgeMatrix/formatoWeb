@extends('layout/layoutA')
@section('contenido')
    <?php $pagina = 10; ?>
    <h1>Bienvenido</h1>
    <p>el usuario autenticado es: {{auth()->user()->email}}</p>
@stop