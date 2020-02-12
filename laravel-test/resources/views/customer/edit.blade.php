@extends('layouts.main')

@section('content')
<form method="POST" action="/customers/{{ $customer->id }}/edit">
    @csrf

    <div>
        <label for="firstName">firstName:</label>
        <input type="text" name="firstName" value="{{ $customer->firstName }}">
    </div>
    <div>
        <label for="lastName">lastName:</label>
        <input type="text" name="lastName" value="{{ $customer->lastName }}">
    </div>
    <div>
        <label for="email">email:</label>
        <input type="text" name="email" value="{{ $customer->email }}">
    </div>
    <div>
        <button>Opslaan</button>
    </div>
</form>
@endsection
