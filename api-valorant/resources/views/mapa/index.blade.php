@extends('layouts.app')

@section('title')
    <title>Mapa</title>
@endsection

@section('content')
{{-- @php
    dd($data['data_mapa']['data']);
@endphp --}}
    @foreach ($data['data_mapa']['data'] as $mapa)
        {{$mapa['uuid']}}
        <img src="{{$mapa['splash']}}" alt="">
    @endforeach
@endsection
