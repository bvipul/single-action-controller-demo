@extends('layouts.app')

@section('content')
    <form action="{{ route('posts.store') }}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" type="text" class="form-control" id="title" placeholder="Enter Title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="body">Body</label>
            <textarea name="body" id="body" class="form-control" placeholder="Body">{{ old('body') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
