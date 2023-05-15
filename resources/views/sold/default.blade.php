@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>Sold</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>

<a class="a-create" href="/sold/create">@include('button-effect1')</a>

@if(session()->has('success'))
    {{session('success')}}
@endif



<table>

    <thead>
        <th>Item Id</th>
        <th>Item Name</th>
        <th>Item Price</th>
        <th>Item Cost</th>
        <th>Item Img</th>
        <th>Customer Id</th>
        <th>Customer Name</th>
        <th>Customer Number</th>
        <th>Controller</th>
    </thead>

    <tbody>

        @foreach($Solds as $sold)

            <tr>

                <td>{{$sold->item_id}}</td>
                <td>{{$sold->item->ItemName}}</td>
                <td>{{$sold->item->ItemPrice}}</td>
                <td>{{$sold->item->ItemCost}}</td>
                <td>{{$sold->item->ItemImg}}</td>
                <td>{{$sold->customer->id}}</td>
                <td>{{$sold->customer->CustomerName}}</td>
                <td>{{$sold->customer->CustomerNumber}}</td>
                <td style="width: fit-content; margin: auto; display: flex;">
                    <form action="{{route('sold.destroy',$sold->id)}}" method="post">
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