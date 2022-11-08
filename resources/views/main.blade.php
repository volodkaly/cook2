@extends('layouts.app')
@section ('content')
{{"Let's cook something amazing! Share your knoledge with the world!"}}
{{"Latest recipes:"}}
@foreach ($recs as $rec)
            <tr>
                <td>
                    <h3>{{ $rec->title }}</h3>
                </td>
                <td>
                <h3>{{ $rec->content }}</h3>
                </td>
            </tr>
            @endforeach
@endsection