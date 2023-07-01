@extends('layouts.app')
@section('title')
    <title>Player card</title>
@endsection
@section('css')

@endsection

@section('content')
    @foreach ($response['data'] as $playerCard )
        {{ $playerCard['displayName'] }}
    @endforeach
@endsection
