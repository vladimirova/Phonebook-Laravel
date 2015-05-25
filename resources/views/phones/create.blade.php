@extends('app');

@section('content')
    <h1>Create new Phone</h1>

    {!! Form::open(['url' => 'phones']) !!}

        <div class="form-group">
            {!! Form::text('contact_id', $contact_id, ['class' => 'hidden']) !!}
        </div>

        @include('phones.form', ['submitButtonText' => 'Add Phone'])

    {!! Form::close() !!}

    @include('errors.list')
@stop