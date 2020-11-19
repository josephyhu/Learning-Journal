@extends('entries.layout')

@section('title', 'Entry Details')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | {{ $entry->title }}</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('entries.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                {{ $entry->created_at }}
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
        <form action="{{ route('entries.destroy', $entry->id) }}" method="POST">
            <a class="btn btn-primary" href="{{ route('entries.edit', $entry->id) }}">Edit</a>
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger delete">Delete</button>
        </form>
    </div>

@endsection
