@extends('layouts.default')

@push('styles')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endpush

@section('title')
    Actores
@endsection

@section('heading')
    <h1>Actores</h1>
@endsection

@section('content')
    <ul>
        @forelse ($actores as $actor)
            <li><a href="actor/{{$actor->id}}">{{$actor->getNombreCompleto()}}</a></li>
        @empty
            No hay actores!
        @endforelse
    </ul>
@endsection