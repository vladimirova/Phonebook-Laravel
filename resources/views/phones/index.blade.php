@extends('app')

@section('content')
    <h2>Phones</h2>
    <a href="{{ action('PhonesController@create', [$contact_id]) }}" class="btn btn-info">New</a>
    <table class="table table-striped">
        {{--<caption>Contacts</caption>--}}
        <thead>
            <tr>
                <th>#</th>
                <th>Phone number</th>
                <th></th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($phones as $phone)
                <tr>
                    <th scope="row"></th>
                    <td>{{ $phone->phone_number }}</td>
                    <td>
                        {!! delete_form(['phones.destroy', $phone->id]) !!}
                    </td>
                    <td>
                        <a href="{{ action('PhonesController@edit', [$phone->id]) }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $phones->render() !!}

@stop