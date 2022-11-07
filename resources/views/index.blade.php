@extends('layouts.app')

@section ('title',' Receipts list')

@section ('content')
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Receipts</title>
</head>

<body>
    <div class="container">
        <h1 class="my-3 text-center">Receipts</h1>
        <table class="table table-striped">
        @if (count($recs) > 0)
        <tbody>
            @foreach ($recs as $rec)
            <tr>
                <td>
                    <h3>{{ $rec->title }}</h3>
                </td>
                <td>
                <h3>{{ $rec->content }}</h3>
                </td>
                <td>
                <a href="{{ route('detail', ['rec' => $rec->id]) }}">Details...</a>
                </td>
            </tr>
            @endforeach
        </tbody>
        @endif
        </table>
    </div>
</body>

</html>

@endsection