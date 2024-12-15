@extends('admin.layouts.main')

@section('content')
<div class="container">
    <form method="post" action="{{route('article.store')}}">
        @csrf
        <!-- Title Input -->
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            @error('title')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Description Input -->
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control" id="description" rows="4" name="description"
                placeholder="Enter description"></textarea>
            @error('description')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Tags Input -->
        <div class="mb-3">
            <label for="tags" class="form-label">Tags</label>
            <input type="text" class="form-control" id="tags" name="tags" placeholder="Enter tags separated by commas">
            @error('tags')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection