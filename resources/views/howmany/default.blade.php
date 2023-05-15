@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>How Many</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>
<table>

    <thead>
        <th>Customers</th>
        <th>Item</th>
        <th>Sold Item</th>
        <th>Meets</th>
        <th>Users</th>
    </thead>

    <tbody>

        <tr>

            <td>{{$customers}}</td>
            <td>{{$items}}</td>
            <td>{{$solds}}</td>
            <td>{{$meets}}</td>
            <td>{{$users}}</td>

        </tr>

    </tbody>

</table>
@endsection