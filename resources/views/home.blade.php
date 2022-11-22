@extends('layouts.app')
@section('title', 'My recipes')
@section('main')
<p class="text-left"><a href="{{ route('rec.add') }}">Add new recipe</a></p>
@if (count($recs) > 0)
<table class="table table-striped">
    <thead>
        <tr>
            <th>Recipe</th>
            <th colspan="2">&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($recs as $rec)
        <tr>
            <td>
                <p>{{$rec->created_at}}<br>{{ "(".$rec->created_at->diffForHumans().")" }}</p>
            </td>
            <td>
                <h3>{{ $rec->title }}</h3>
            </td>
            <td>
                <p>{{ $rec->content }}</p>
            </td>
            <td>
                <a href="{{ route('detail', ['rec' => $rec->id]) }}">Details...</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection