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
    <div class="container">
        <div class="row">
            <h4 class="m-3">Article Detail</h4>
            <div class="card m-3">
                {{-- <h5 class="card-header">Featured</h5> --}}
                <div class="card-body">
                    <h5 class="card-title">{{ $detail->title }}</h5>
                    <div class="card-subtitle mb-2 text-muted small">
                        {{ $detail->created_at->diffForHumans() }},
                        Category: <b>{{ $detail->category->name }}</b>
                    </div>
                    <p class="card-text">{{ $detail->body }}</p>
                    <a href="#" class="btn text-white" style="background-color: #FF4500;">Delete</a>
                    <a href="{{ route('article.list') }}" class="btn text-white"
                        style="background-color: 	#4169E1;">Back</a>
                </div>
                <ul class="list-group mb-3">
                    <li class="list-group-item " style="background-color: 	#4169E1;">
                        <b>Comments ({{ count($detail->comments) }})</b>
                    </li>
                    @foreach ($detail->comments as $comment)
                        <li class="list-group-item">
                            {{ $comment->content }}
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
