@extends('app')

@section('content')
    <h2>Contacts</h2>
    <h3>Search</h3>

    {!! Form::open(['url' => 'contacts', 'method' =>'GET', 'class' => 'form-inline']) !!}
        <div class="form-group">
            {{--{!! Form::label('searchBy', 'Search By') !!}--}}
            {!! Form::select('column', ['fname' => 'First Name', 'lname' => 'Last Name', 'email' => 'Email', 'phone_number' => 'Phone'], $column, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::text('search', $search, ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Search', ['class' => 'btn btn-info form-control btn-submit']) !!}
        </div>
    {!! Form::close() !!}


    <table class="table table-striped">
        {{--<caption>Contacts</caption>--}}
        <thead>
            <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Phones</th>
                <th>New Phone</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $tRow++ }}</td>
                    <td>{{ $contact->fname }}</td>
                    <td>{{ $contact->lname }}</td>
                    <td>{{ $contact->email }}</td>
                    <td>
                        @foreach($contact->phones as $phone)
                            {{ $phone->phone_number }} </br>
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ action('ContactsController@show', [$contact->id]) }}" class="btn btn-info">New</a>
                    </td>
                    <td>
                        {!! delete_form(['contacts.destroy', $contact->id]) !!}
                    </td>
                    <td>
                        <a href="{{ action('ContactsController@edit', [$contact->id]) }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $contacts->appends(['column' => $column, 'search' => $search])->render() !!}

@stop