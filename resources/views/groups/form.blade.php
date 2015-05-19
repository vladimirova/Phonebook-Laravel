<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control', 'size' => '30x3']) !!}
</div>

<div class="form-group">
        @foreach($contacts as $id => $name)
        {!! Form::label('contacts[]', $name) !!}
        {!! Form::checkbox('contacts[]', $id, isset($check) ? true : null) !!}
        @endforeach

@if(isset($notselected))
    @foreach($notselected as $id => $name)
            {!! Form::label('contacts[]', $name) !!}
            {!! Form::checkbox('contacts[]', $id, null) !!}
    @endforeach
@endif
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class' => 'btn btn-info form-control btn-submit']) !!}
</div>