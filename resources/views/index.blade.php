<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <title>Laravel - Search with relationship db</title>
</head>
<body>
    <div class="container">
        <h1 class="text-center text-success pt-4">
            Search with relationship in <strong class="text-danger">Laravel</strong>
        </h1>
        <hr>
        <div class="row py-2">
            {{-- Div for button --}}
            <div class="col-md-6">
                <h2><a href="" class="btn btn-success">Add New Post</a></h2>
            </div>

            {{-- Div for button search --}}
            <div class="col-md-6">
                <div class="form-group">
                    <form action="/search" method="get">
                        <div class="input-group">
                            <input type="" class="form-control" name="search" placeholder="Search ..." value="{{ isset($search) ? $search : ''}}">
                            <button type="button" class="btn btn-primary">Search</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
        <table class="table table-hover">
            <thead>
                <th scope="col">#</th>
                <th scope="col">Title</th>
                <th scope="col">Category Name</th>
                <th scope="col">User Name</th>
                <th scope="col">Description</th>
                <th scope="col">Action</th>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <th scope="row">{{ $post->id }}</th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->user->name }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>{{ $post->description }}</td>
                        <td>
                            <a href="" class="btn btn-danger">Delete</a>
                            <a href="" class="btn btn-primary">Edit</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
