@extends('users.entries.layout')

@section('title', 'Entry Details')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | {{ $entry->title }}</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.entries.index', $user->id) }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $entry->date }} {{ $entry->time }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $entry->hours }} hours {{ $entry->minutes }} minutes
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a href="{{ route('categories.show', $entry->category->id) }}">{{ $entry->category->name }}</a> {{ $entry->difficulty }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $entry->comments }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <a href="{{ $entry->url }}" target="_blank" rel="noopener">{{ $entry->title }}</a>
            </div>
        </div>
        @if (auth()->user()->id == $entry->users->first->pivot->id)
            <form action="{{ route('users.entries.destroy', [$entry->users->first->pivot->id, $entry->id]) }}" method="POST">
                <a class="btn btn-primary" href="{{ route('users.entries.edit', [$entry->users->first->pivot->id, $entry->id]) }}">Edit</a>
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger delete">Delete</button>
            </form>
        @endif
    </div>

@endsection
