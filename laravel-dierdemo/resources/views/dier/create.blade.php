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
            <label for="soort">soort:</label>
            <select name="soort" class="form-control @error('soort') is-invalid @enderror">
                <option value="">--- Selecteer soort ---</option>
                @foreach ($dierSoorten as $dierSoort)
                <option value="{{ $dierSoort->id }}">{{ $dierSoort->naam }}</option>
                @endforeach
            </select>

            @error('soort')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="naam">naam:</label>
            <input id="naam" type="text" name="naam" class="form-control @error('naam') is-invalid @enderror"
                value="{{ old('naam') }}">

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
