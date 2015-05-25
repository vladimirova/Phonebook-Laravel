@extends('app');

@section('content')
    <h1>Create new Contact</h1>

    {!! Form::open(['url' => 'contacts']) !!}
        @include('contacts.form', ['submitButtonText' => 'Add Contact'])
    {!! Form::close() !!}

    @include('errors.list')
@stop