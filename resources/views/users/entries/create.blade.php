@extends('users.entries.layout')

@section('title', 'Add Entry')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | Add Entry</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.entries.index', $user->id) }}">Back</a>
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
    @php($date = date('Y-m-d'))
    @php($time = date('H:i'))
    <form action="{{ route('users.entries.store', $user->id) }}" method="POST">
        @csrf

        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="title">Title<span class="required">*</span>:</label>
                    <input type="text" name="title" class="form-control" id="title">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="date">Date<span class="required">*</span>:</label>
                    <input type="date" name="date_created" class="form-control" id="date" value="{{ $date }}">
                    <label for="time">Time<span class="required">*</span>:</label>
                    <input type="time" name="time_created" class="form-control" id="time" value="{{ $time }}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="hours">Hours<span class="required">*</span>:</label>
                    <input type="number" name="hours" class="form-control" id="hours" min="0">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="minutes">Minutes<span class="required">*</span>:</label>
                    <input type="number" name="minutes" class="form-control" id="minutes" min="0" max="59">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="category">Category<span class="required">*</span>:</label><br>
                    <select name="category_id" id="category">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="difficulty">Difficulty<span class="required">*</span>:</label>
                    <select name="difficulty" id="difficulty">
                        <option value="Beginner">Beginner</option>
                        <option value="Intermediate">Intermediate</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="notes">Notes:</label>
                    <textarea name="notes" class="form-control" id="notes" rows="5"></textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <label for="url">URL (Begin with <strong>https://</strong> or <strong>http://</strong>)<span class="required">*</span>:</label>
                    <input type="url" name="url" class="form-control" id="url" placeholder="https://www.example.com" pattern="https?://.*">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>

    </form>
@endsection
