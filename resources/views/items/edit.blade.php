@extends('layouts.main')


@section('content')
<div class="input_form">
    <form action="{{route('items.update',$item->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <label for="">itemname</label>
        <input type="text" name="ItemName" id="" value="{{$item->ItemName}}">
        <label for="">itemprice</label>
        <input type="text" name="ItemPrice" id="" value="{{$item->ItemPrice}}">
        <label for="">itemdatebuy</label>
        <input type="date" name="ItemDateBuy" id="" value="{{$item->ItemDateBuy}}">
        <label for="">itemsold</label>
        <input type="text" name="ItemSold" id="" value="{{$item->ItemSold}}">
        <label for="">itemcost</label>
        <input type="text" name="ItemCost" id="" value="{{$item->ItemCost}}">
        <label for="">itemdatesold</label>
        <input type="date" name="ItemDateSold" id="" value="{{$item->ItemDateSold}}">
        <label for="">itemimg</label>

        <input type="file" name="photo">
        <img src="{{Storage::url($item->photo)}}" style="width: 100px; height: 100px;">

        <input type="submit" name="submit" value="submit">
    </form>
</div>

@endsection