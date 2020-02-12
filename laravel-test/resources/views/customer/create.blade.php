@extends('layouts.main')

@section('content')
<form method="POST">
    @csrf

    <div>
        <label for="firstName">firstName:</label>
        <input type="text" name="firstName" value="">
    </div>
    <div>
        <label for="lastName">lastName:</label>
        <input type="text" name="lastName" value="">
    </div>
    <div>
        <label for="email">email:</label>
        <input type="text" name="email" value="">
    </div>
    <div>
        <button>Opslaan</button>
    </div>
</form>
@endsection
