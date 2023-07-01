@extends('layouts.app')

@section('title')
    <title>tipo de juegos</title>
@endsection

@section('content')

    @foreach ($data['data_gamemode']['data'] as $gamemode )
        {{$gamemode['displayName']}}
        {{$gamemode['duration']}}<br>
    @endforeach

@endsection
