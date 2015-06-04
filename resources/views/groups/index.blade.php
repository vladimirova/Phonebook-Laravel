@extends('app')

@section('content')
    <h1>Groups</h1>

    <table class="table table-striped">
        <caption>Groups</caption>
        <thead>
            <tr>
                <th>#</th>
                <th>Name</th>
                <th>Description</th>
                <th>Count members</th>
                <th>Show</th>
                <th>Delete</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            @foreach($groups as $group)
                <tr>
                    <td>{{ $tRow++ }}</td>
                    <td>{{ $group->name }}</td>
                    <td>{{ $group->description }}</td>
                    <td>{{ $group->mCount }}</td>
                    <td>
                        <a href="{{ action('GroupsController@show', [$group->id]) }}" class="btn btn-info">Show</a>
                    </td>
                    <td> {!! delete_form(['groups.destroy', $group->id]) !!}</td>
                    <td>
                        <a href="{{ action('GroupsController@edit', [$group->id]) }}" class="btn btn-info">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {!! $groups->render() !!}
@stop