@extends('entries.layout')

@section('title', 'All Categories')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h1>My Learning Journal</h1>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('categories.create') }}">Add New Category</a>
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
            <th>Category Name</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($categories as $category)
            <tr>
                <td><a href="{{ route('categories.show', $category->id) }}">{{ $category->name }}</a></td>
                <td>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST">

                        <a class="btn btn-primary" href="{{ route('categories.edit', $category->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger delete">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

@endsection
