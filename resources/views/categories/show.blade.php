@extends('categories.layout')

@section('title', 'Category')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | {{ $category->name }}</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('categories.index') }}">Back</a>
            </div>
        </div>
    </div>
    <div class="row">
        @foreach ($category->entries as $entry)
            @if (auth()->user()->id == $entry->users->first->pivot->id)
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <a href="{{ route('users.entries.show', [$entry->users->first->pivot->id, $entry->id]) }}">{{ $entry->title }}</a>
                    </div>
                </div>
            @endif
        @endforeach
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete">Delete</button>
        </form>
    </div>

@endsection
