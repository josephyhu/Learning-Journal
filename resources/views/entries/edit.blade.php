@extends('entries.layout')

@section('title', 'Edit Entry')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | Edit Entry</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('entries.index') }}">Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('entries.update', $entry->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title" value="{{ $entry->title }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="hours">Hours:</label>
                    <input type="number" name="hours" class="form-control" id="hours" min="0" value="{{ $entry->hours }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="minutes">Minutes:</label>
                    <input type="number" name="minutes" class="form-control" id="minutes" min="0" max="59" value="{{ $entry->minutes }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="category_id">Category ID:</label><br>
                    @foreach ($categories as $category)
                        {{ $category->id }}: {{ $category->name }}<br>
                    @endforeach
                    <input type="number" name="category_id" class="form-control" id="category_id" value="{{ $entry->category_id }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="difficulty">Difficulty:</label>
                    <input type="text" name="difficulty" class="form-control" id="difficulty" value="{{ $entry->difficulty }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="comments">Comments:</label>
                    <textarea name="comments" class="form-control" id="comments" rows="5">{{ $entry->comments }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="url">URL (Begin with <strong>https://</strong> or <strong>http://</strong>):</label>
                    <input type="text" name="url" class="form-control" id="url" pattern="https?://.*" value="{{ $entry->url }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
