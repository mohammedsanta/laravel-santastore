@extends('layouts.main')

@section('content')

<div class='name-page'>
    <button class="btn" type="button">
    <strong>Items</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>


<a class="a-create" href="/items/create">@include('button-effect1')</a>

@if(session()->has('success'))
    {{session('success')}}
@endif

<table>

    <thead>
        <th>Name</th>
        <th>Price</th>
        <th>Date Buy</th>
        <th>Sold</th>
        <th>Cost</th>
        <th>Image</th>
        <th>Controller</th>
    </thead>

    <tbody>

    @foreach($items as $item)

        <tr>



            <td>{{$item->ItemName}}</td>
            <td>{{$item->ItemPrice}}</td>
            <td>{{$item->ItemDateBuy}}</td>
            <td>{{$item->ItemSold}}</td>
            <td>{{$item->ItemCost}}</td>
            <td><img src="{{Storage::url($item->photo)}}" style="width: 100px; height: 100px;"></td>
            <td class="controller">
                <a href="/items/{{$item->id}}/edit">@include('edit-button2')</a>
                <form action="{{route('items.destroy',$item->id)}}" method="POST">
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