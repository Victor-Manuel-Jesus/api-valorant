@extends('layouts.app')

@section('title')
    <title>Consultas</title>
@endsection

@section('content')
    <form action="{{route('consulta_respuesta')}}">
        @csrf
        <input type="text" class="form-control" name="pregunta">
        <button class="btn btn-primary">Enviar</button>
    </form>
    <consulta-gpt>
@endsection
