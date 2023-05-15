@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>Needs</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>

<a class="a-create" href="/needs/create">@include('button-effect1')</a>

@if(session()->has('success'))
    {{session('success')}}
@endif

<table>

    <thead>
        <th>itemname</th>
        <th>numberneed</th>
        <th>numbersold</th>
        <th>controller<s/th>
    </thead>

    <tbody>

        @foreach($needs as $need)

        <tr>

            <td>{{$need->ItemName}}</td>
            <td>{{$need->NumberNeeds}}</td>
            <td>{{$need->NumberSold}}</td>
            <td class="controller">
                <a href="/needs/{{$need->id}}/edit">@include('edit-button2')</a>
                <form action="{{route('needs.destroy',$need->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    @include('delete-button1')
                </form>
            </td>

        </tr>

        @endforeach

    </tbody>

</table>

@endsection