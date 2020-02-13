@extends('layout.base')

@section('content')
<div>
    <h2>Create dier</h2>
    <form method="POST">
        @csrf

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <label for="type">type:</label>
        <input id="type" type="text" name="type"><br>
        <label for="naam">naam:</label>
        <input id="naam" type="text" name="naam"><br>
        <button class="btn btn-primary">Dier aanmaken</button>
    </form>
</div>
@endsection
