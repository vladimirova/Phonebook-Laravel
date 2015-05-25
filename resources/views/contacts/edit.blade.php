@extends('app')

@section('content')
    <h1>Edit Contact</h1>

    {!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactsController@update', $contact->id]]) !!}
    @include('contacts.form', ['submitButtonText' => 'Save', 'check' => 'true'])
    {!! Form::close() !!}

    @include('errors.list')
@stop