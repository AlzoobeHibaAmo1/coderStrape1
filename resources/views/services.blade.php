@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Welcome to Laravel 6 from services</h1>

    <ul>

        @foreach($services as $service)
            <li>{{ $service }}</li>
        @endforeach
    </ul>

@endsection
