@extends('app')

@section('content')
    <h1>Group name: {{ $group->name }}</h1>
    <h2>Description: {{ $group->description }}</h2>
    <h2>Members:</h2>

    @foreach($contacts as $contact)
        <ul class="list-group">
            <li class="list-group-item">{{ $contact }}</li>
        </ul>
    @endforeach

@endsection