@extends('entries.layout')

@section('title', 'User')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | {{ $user->name }}</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($user->entries as $entry)
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <a href="{{ route('entries.show', $entry->id) }}">{{ $entry->title }}</a>
                </div>
            </div>
        @endforeach
    </div>

@endsection
