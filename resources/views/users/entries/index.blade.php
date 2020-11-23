@extends('users.entries.layout')

@section('title', 'All Entries')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | All Entries</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('users.entries.create', $user->id) }}">Add New Entry</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <th>Date and Time</th>
            <th>Category</th>
            <th>Difficulty</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($entries as $entry)
            @if ($user->id == $entry->users->first->pivot->id)
                <tr>
                    <td><a href="{{ route('users.entries.show', [$entry->users->first->pivot->id, $entry->id]) }}">{{ $entry->title }}</a></td>
                    <td>{{ $entry->date_created->format('F d, Y')  }} {{ $entry->time_created->format('H:i')  }}</td>
                    <td><a href="{{ route('categories.show', $entry->category->id) }}">{{ $entry->category->name }}</a></td>
                    <td>{{ $entry->difficulty }}</td>
                    <td>
                        <form action="{{ route('users.entries.destroy', [$entry->users->first->pivot->id, $entry->id]) }}" method="POST">

                            <a class="btn btn-primary" href="{{ route('users.entries.edit', [$entry->users->first->pivot->id, $entry->id]) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger delete">Delete</button>
                        </form>
                    </td>
                </tr>
            @endif
        @endforeach
    </table>

    {!! $entries->links() !!}

@endsection
