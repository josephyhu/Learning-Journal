@extends('entries.layout')

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
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <a href="{{ route('entries.show', $entry->id) }}">{{ $entry->title }}</a>
                </div>
            </div>
        @endforeach
        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete">Delete</button>
        </form>
    </div>

@endsection
