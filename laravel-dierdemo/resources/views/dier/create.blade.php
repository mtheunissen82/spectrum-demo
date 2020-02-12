@extends('layout.base')

@section('content')
<div>
    <h2>Create dier</h2>
    <form method="POST">
        @csrf

        <label for="type">type:</label>
        <input id="type" type="text" name="type"><br>
        <label for="naam">naam:</label>
        <input id="naam" type="text" name="naam"><br>
        <button>Dier aanmaken</button>
    </form>
</div>
@endsection
