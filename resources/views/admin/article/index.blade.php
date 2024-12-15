@extends('admin.layouts.main')

@section('content')

<div class="flex justify-between items-center mb-4">
    <h1>Articles</h1>
    <a href="/article/create" class="btn btn-primary">Create</a>
</div>

<div>
    <table class="table">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Description</th>
                <th>User</th>
                <th>Tags</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
            @foreach($articles as $index => $article)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $article->title }}</td>
                    <td>{{ $article->description }}</td>
                    <td>{{ $article->user_id }}</td>
                    <td>{{ $article->tags }}</td>
                    <td>
                        <div class="flex gap-2">
                            <!-- Edit Button -->
                            <a href="/article/{{ $article->id }}/edit" class="btn btn-secondary">Edit</a>

                            <!-- Delete Button -->
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this article?');"
                                style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection