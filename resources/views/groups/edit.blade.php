@extends('app');

@section('content')
    <h1>Create new Group</h1>
    {{--{!! Form::model($contact, ['method' => 'PATCH', 'action' => ['ContactsController@update', $contact->id]]) !!}--}}
    {!! Form::model($group, ['method' => 'PATCH', 'action' => ['GroupsController@update', $group->id]]) !!}
    @include('groups.form', ['submitButtonText' => 'Edit Contact', 'check' => 'null'])
    {!! Form::close() !!}

    @include('errors.list')
@stop