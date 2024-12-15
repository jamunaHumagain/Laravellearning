@extends('admin.layouts.main')


@section('content')
<div class="container">
    <form method="post" action="{{ route('articles.update', $article->id) }}">
        @csrf
        @method('put')



        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title"
                value="{{ old('title', $article->title) }}">
            @error('title')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="4" name="description"
                placeholder="Enter description">{{ old('description', $article->description) }}</textarea>
            @error('description')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags separated by commas"
                value="{{ old('tags', $article->tags) }}">
            @error('tags')
                <small class="text-danger">{{ $message }}</small>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection