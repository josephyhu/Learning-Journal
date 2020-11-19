@extends('entries.layout')

@section('title', 'Add Entry')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | Add Entry</h1>
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

    <form action="{{ route('entries.store') }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="hours">Hours:</label>
                    <input type="number" name="hours" class="form-control" id="hours" min="0">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="minutes">Minutes:</label>
                    <input type="number" name="minutes" class="form-control" id="minutes" min="0" max="59">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="category">Categories</label><br>
                    <select name="categories[]" id="category"></select>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="difficulty">Difficulty:</label>
                    <input type="text" name="difficulty" class="form-control" id="difficulty">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="comments">Comments:</label>
                    <textarea name="comments" class="form-control" id="comments" rows="5"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="url">URL (Begin with <strong>https://</strong> or <strong>http://</strong>):</label>
                    <input type="url" name="url" class="form-control" id="url" placeholder="https://www.example.com" pattern="https?://.*">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
