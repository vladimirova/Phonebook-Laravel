<div class="form-group">
    {!! Form::label('fname', 'First name') !!}
    {!! Form::text('fname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('lname', 'Last name') !!}
    {!! Form::text('lname', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
</div>

@if (isset($contact))
    @foreach($contact->phones as $phone)
        <div class="form-group">
            {!! Form::label('phone_number[]', 'phone_number') !!}
            {!! Form::text('phone_number['.$phone->id.']', $phone -> phone_number, ['id' => $phone -> id, 'class' => 'form-control']) !!}
        </div>
    @endforeach
@else
    <div class="form-group">
        {!! Form::label('phone_number', 'phone_number') !!}
        {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
    </div>
@endif


{{--<div class="form-group">--}}
    {{--{!! Form::label('phone_number', 'phone_number') !!}--}}
    {{--{!! Form::text('phone_number[]', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control btn-submit']) !!}
</div>