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
</table>
@endforeach
@endsection