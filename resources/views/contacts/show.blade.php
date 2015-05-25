@extends('app')

@section('content')
    <h1>Contact</h1>
    <h2>First name: {{ $contact->fname }}</h2>
    <h3>Last name: {{ $contact->lname }}</h3>
    <h3>Email: {{ $contact->email }}</h3>
    <h3>Phones:</h3>
    @foreach($contact->phones as $phone)
        <h3>{{ $phone->phone_number }}</h3>
    @endforeach

    {!! Form::open(['url' => 'phones']) !!}

    <div class="form-group">
        {!! Form::text('contact_id', $contact->id, ['class' => 'hidden']) !!}
    </div>

    @include('phones.form', ['submitButtonText' => 'Add Phone'])

    {!! Form::close() !!}

    @include('errors.list')
@stop
