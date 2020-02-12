@extends('layouts.main')

@section('content')
<h1>Overview of all customers</h1>

<div>
    @foreach ($customers as $customer)
    <div>{{ $customer->firstName }} {{ $customer->lastName }} {{ $customer->email }}</div>
    @endforeach
</div>
@endsection
