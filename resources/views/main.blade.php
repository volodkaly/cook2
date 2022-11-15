@extends('layouts.app')
@section ('content')
{{"Let's cook something amazing! Share your knoledge with the world!"}}
{{"Latest recipes:"}}
@foreach ($recs as $rec)
            <tr>
                <td>
                    <h3>{{ $rec->title }}{{" (".$rec->created_at->diffForHumans().") "}}<br>{{"Date:".$rec->created_at}}</h3>
                </td>
                <td>
                <p>{{ $rec->content }}</p>
                </td>
            </tr>
            @endforeach
@endsection