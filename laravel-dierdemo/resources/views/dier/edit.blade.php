@extends('layout.base')

@section('content')
<div>
    <h2>Edit dier</h2>
    <form method="POST">
        @csrf

        <div class="form-group">
            <label for="soort">soort:</label>
            <select name="soort" class="form-control @error('soort') is-invalid @enderror">
                <option value="">--- Selecteer soort ---</option>
                @foreach ($dierSoorten as $dierSoort)
                <option value="{{ $dierSoort->id }}" @if ($dier->soort->id == $dierSoort->id) selected @endif>{{ $dierSoort->naam }}</option>
                @endforeach
            </select>

            @error('soort')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="naam">naam:</label>
            <input id="naam" class="form-control" type="text" name="naam" value="{{ $dier->naam }}">

            @error('naam')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <button class="btn btn-primary">Dier wijzigen</button>
        </div>
    </form>
</div>
@endsection
