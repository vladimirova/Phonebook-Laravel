@extends('app');

@section('content')
    <h1>Create new Group</h1>

    {!! Form::open(['url' => 'groups'])!!}
        @include('groups.form', ['submitButtonText' => 'Add Contact'])
    {!! Form::close() !!}

    @include('errors.list')
@stop