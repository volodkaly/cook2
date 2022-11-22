@extends('layouts.app')
@section ('content')
{{"Let's cook something amazing! Share your knoledge with the world!"}}
{{"Latest recipes:"}}
@foreach ($recs as $rec)
<table class="table table-striped" id = "tablestr">
            <tr>
                <td>
                    <h2>{{ $rec->title }}</h2><br><p>{{" (".$rec->created_at->diffForHumans().") "}}<br>{{"Date:".$rec->created_at}}</p>
                </td>
                <td>
                <p style="font-size:200%;" style="text-align:center;" >{{ $rec->content }}</p>
                </td>
            </tr>
            </table>
            @endforeach
@endsection