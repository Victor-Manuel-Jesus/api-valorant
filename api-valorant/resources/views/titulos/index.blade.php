@extends('layouts.app')

@section('title')
    <title>titulos</title>
@endsection

@section('content')
    {{--  @php
        dd($response);
    @endphp --}}
    @foreach ($response['data'] as $titulo )
        {{$titulo['displayName']}}
        {{$titulo['titleText']}}
        {{$titulo['isHiddenIfNotOwned']}}

    @endforeach
@endsection
