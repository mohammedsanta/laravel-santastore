@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>Meets</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>

@if(session()->has('success'))
    {{session('success')}}
@endif

<a class="a-create" href="/meets/create">@include('button-effect1')</a>

<table>

    <thead>
        <th>meetsdate</th>
        <th>meetslocation</th>
        <th>meetscontroller</th>
    </thead>

    <tbody>

        @foreach($meets as $meet)

        <tr>

            <td>{{$meet->MeetDate}}</td>
            <td>{{$meet->MeetLocation}}</td>
            <td  class="controller">
                <a href="/meets/{{$meet->id}}/edit">@include('edit-button2')</a>
                <a href="/meets/delete/{{$meet->CustomerId}}">@include('delete-button1')</a>
            </td>

        </tr>


        @endforeach
    </tbody>

</table>
@endsection