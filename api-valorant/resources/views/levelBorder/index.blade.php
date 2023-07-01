@extends('layouts.app')

@section('title')
    <title>Player Border</title>
@endsection

@section('content')
    @foreach ($response['data'] as $levelBorder)
        {{$levelBorder['startingLevel']}}
    @endforeach
@endsection
