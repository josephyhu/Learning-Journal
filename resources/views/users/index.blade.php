@extends('users.layout')

@section('title', 'All Users')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>Learning Journal | All Users</h1>
            </div>
        </div>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>User Name</th>
        </tr>
        @foreach ($users as $user)
            <tr>
                <td><a href="{{ route('users.show', $user->id) }}">{{ $user->name }}</a></td>
            </tr>
        @endforeach
    </table>

@endsection
