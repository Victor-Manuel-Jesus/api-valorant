@extends('layouts.app')
@section('title')
    <title>Agentes</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('public/css/agente.css')}}">
@endsection

@section('content')
    {{-- @php
        dd($data);
    @endphp --}}
    <agente-valorant />
@endsection
