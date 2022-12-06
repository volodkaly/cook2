@extends('layouts.app')
@section ('content')
{{"Let's cook something amazing! Share your knoledge with the world!"}}
{{"Latest recipes:"}}
@foreach ($recs as $rec)
<table class="table table-striped">
    <tr>
        <td>
            <h2>{{"author: "}}{{ $rec->user->name }}</h2>
            <br>
            <p>
                {{"Date: ".$rec->created_at}}
                <br>{{" (".$rec->created_at->diffForHumans().") "}}
            </p>
            <br>
        </td>
    </tr>
    <tr>
        <td>
            <h2>{{"Repice title: "}}<br>{{$rec->title }}</h2>
            <p style="font-size:200%;" style="text-align:center;">{{"How to cook it: "}}<br>{{$rec->content }}</p>
        </td>
    </tr>
    <form action="{{ route('reviews.store') }}" method="post">
    @csrf
        <input type="range" name="value" min="0" max="10">
        <input type="hidden" value ="{{$rec->id}}" name="reciept_id">
        <input type="submit" value="Submit">
    </form>

</table>
@endforeach
{{ $recs->links() }}
@endsection
@section('comments')
@foreach ($coms as $com)
{{$com->content}}
@endforeach
<form action="comments" method="post">
    @csrf
    <input type="text" name="comment" value="comment">
</form>
<a href="#" class="btn danger"></a>
@endsection