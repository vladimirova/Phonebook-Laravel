@extends('app')

@section('content')
    <h1>Edit Contact</h1>

    {!! Form::model($phone, ['method' => 'PATCH', 'action' => ['PhonesController@update', $phone->id]]) !!}
    @include('phones.form', ['submitButtonText' => 'Save'])
    {!! Form::close() !!}

    {{--{!! delete_form(['phones.destroy', $phone->id]) !!}--}}
@stop