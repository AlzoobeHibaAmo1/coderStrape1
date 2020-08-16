@extends('app')

@section('title', 'Services')

@section('content')

    <h1>Welcome to Laravel 6 from services</h1>

    <form action="/service" method="post">
        <input type="text" name="name">
        @csrf
        <button>Add Services</button>
    </form>

    @error('name') {{$message}} @enderror

    <ul>

        @foreach($services as $service)
            <li>{{ $service-> name }}</li>
        @endforeach
    </ul>

@endsection
