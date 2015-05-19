{{--<div class="form-group">--}}
    {{--{!! Form::label('user_id', 'id') !!}--}}
    {{--{!! Form::text('user_id', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::label('phone_number', 'Phone number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>




<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control btn-submit']) !!}
</div>