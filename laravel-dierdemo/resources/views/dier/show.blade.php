@extends('layout.base')

@section('content')
<div>
    <h2>Dier detailpagina</h2>
    <p>soort: {{ $dier->soort->naam }}</p>
    <p>naam: {{ $dier->naam }}</p>
    <button onclick="window.history.back()">Terug naar vorige pagina</button><br>
    <a href="{{ route('dier.index') }}">Terug naar overzicht</a><br>
    <a href="{{ route('dier.edit', [$dier->id]) }}">Wijzigen</a>
</div>
@endsection
