@extends('layouts.app')
@section('title', 'Edit recipe: ')
@section('main')
<form action="{{ route('rec.update', ['rec' => $rec->id]) }}" method = "POST">
    @csrf
    @method('PATCH')
    <div class="form-group">
        <label for="txtTitle">Recipe</label>
        <input name="title" id="txtTitle" class="form-control" value="{{ $rec->title }}">
    </div>
    <div class="form-group">
        <label for="txtContent">Description</label>
        <textarea name="content" id="txtContent" class="form-control" row="3">{{ $rec->content }}</textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Edit recipe">
</form>
@endsection