@extends('layouts.app')

@section ('title',' Reciept detail')
@section ('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>{{$rec->title}} Recipe</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3 text-center">Recipe</h1>
        <h2>{{ $rec->title }}</h2>
        <p>{{ $rec->content }}</p>
        <a href="{{ route('rec.edit', ['rec' => $rec->id]) }}">
        <button type="button" class="btn btn-primary">Edit
        </button>
        </a>
        <a href="{{ route('rec.delete', ['rec' => $rec->id]) }}">
        <button type="button" class="btn btn-danger">
            Delete
        </button>
        </a>
        <p><a  href="{{ route('index') }}" class="text-center">To the list of recipes</a></p>
    </div>
</body>

</html>
@endsection