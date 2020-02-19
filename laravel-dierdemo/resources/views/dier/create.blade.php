@extends('layout.base')

@section('content')
<div>
    <h2>Create dier</h2>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form method="POST">
        @csrf
        <div class="form-group">
            <label for="type">type:</label>
            <input id="type" type="text" name="type" class="form-control @error('type') is-invalid @enderror">

            @error('type')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="naam">naam:</label>
            <input id="naam" type="text" name="naam" class="form-control @error('naam') is-invalid @enderror">

            @error('naam')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <button class="btn btn-primary">Dier aanmaken</button>
        </div>
    </form>
</div>
@endsection
