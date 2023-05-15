@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>Users</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>


<a class="a-create" href="{{route('auth.signup')}}">@include('button-effect1')</a>

<table>

    <thead>
        <th>Name</th>
        <th>Email</th>
        <th>Controller</th>
    </thead>

    <tbody>

        @foreach($users as $user)

        <tr>

            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td  class="controller" colsapn='1'>
                <a href="/auth/{{$user->id}}/edit">@include('edit-button2')</a>
                <a href="/auth/delete/{{$user->id}}">@include('delete-button1')</a>
            </td>

        </tr>

        @endforeach
    </tbody>

</table>
@endsection