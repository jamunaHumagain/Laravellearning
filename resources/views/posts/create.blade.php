<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Post</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <div class="container my-5 py-5">
        <div class="card">

            <div class="card-header">
                <h3>Add New Post</h3>
            </div>
            <div class="card-body">
                <form action="{{route('posts.store')}}" method="post">

                    @csrf
                    <div class="form-group mb-3">
                        <label for="title" class="form-label">Title <b>*</b></label>

                        <input type="text" class="form-control" name="title" id="title" value={{old('title')}}>
                        @error('title')
                            <small class="text-danger">{{$message}}</small>
                        @enderror



                    </div>

                    <div class="form-group mb-3">
                        <label for="url" class="form-label">Url <b>*</b></label>
                        <input type="text" class="form-control" name="url" id="url" value="{{old('url')}}">
                        @error('url')
                            <small class="text-danger">{{$message}}</small>
                        @enderror

                    </div>

                    <button type="submit" class="btn btn-primary">Save Post</button>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>

</html>