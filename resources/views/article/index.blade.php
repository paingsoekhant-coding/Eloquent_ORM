<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Articles</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4  ">
        {{-- <div class="row">
            <div class="card mt-4 shadow-lg">
                <div class="card-body">
                    <h5 class="card-title">{{ $article->title }}</h5>
                    <div class="card-subtitle mb-2 text-muted small">

                    </div>
                    <p class="card-text">{{ $article->body }}</p>
                    <a href="#" class="btn btn-warning">Delete</a>
                </div>
            </div>
            <div class="card mt-4 shadow-lg">
                <h5 class="mt-2">Comment</h5>
                <div class="card-body">
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>

                </div>
            </div>
        </div> --}}
        <div class="row col-12">
            <h4 class="m-3">Article Lists</h4>
            <small class="m-3 text-muted bold">Total Articles - {{ count($data) }}</small>
            <div class="m-3">
                {{ $data->links() }}
            </div>
            @foreach ($data as $d)
                <div class="card m-3">
                    {{-- <h5 class="card-header">Featured</h5> --}}
                    <div class="card-body">
                        <h5 class="card-title">{{ $d->title }}</h5>
                        <div class="card-subtitle mb-2 text-muted small">
                            {{ $d->created_at->diffForHumans() }},
                            Category: <b>{{ $d->category->name }}</b>
                        </div>
                        <p class="card-text">{{ $d->body }}</p>
                        <a href="{{ route('article.detail', $d->id) }}" class="btn text-white"
                            style="background-color: 	#8A2BE2;">View Detail</a>
                    </div>
                </div>
            @endforeach

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
