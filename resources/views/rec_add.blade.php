@extends('layouts.app')
@section('title', 'Add recipe: ')
@section('main')
<form action="{{ route('rec.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="txtTitle">Recipe</label>
        <input name="title" id="txtTitle" class="form-control">
    </div>
    <div class="form-group">
        <label for="txtContent">Description</label>
        <textarea name="content" id="txtContent" class="form-control" row="3"></textarea>
    </div>

    <input type="submit" class="btn btn-primary" value="Add recipe">
</form>
@endsection