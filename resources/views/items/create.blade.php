@extends('layouts.main')

@section('content')
<div class="input_form">
    <form action="{{ route('items.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <label for="">items_name</label>
        <input type="text" name="ItemName" value="<?= old('ItemName'); ?>">

        @error('ItemName')
        {{$message}}
        @enderror

        <label for="">items_price</label>
        <input type="text" name="ItemPrice" value="<?= old('ItemPrice'); ?>">

        @error('ItemPrice')
        {{$message}}
        @enderror

        <label for="">items_datebuy</label>
        <input type="date" name="ItemDateBuy" value="<?= old('ItemDateBuy'); ?>">

        @error('ItemDateBuy')
        {{$message}}
        @enderror

        <label for="">items_sold</label>
        <input type="text" name="ItemSold" value="<?= old('ItemSold'); ?>">

        @error('ItemSold')
        {{$message}}
        @enderror

        <label for="">items_Cost</label>
        <input type="text" name="ItemCost" value="<?= old('ItemCost'); ?>">

        @error('ItemCost')
        {{$message}}
        @enderror


        <label for="">items_image</label>
        <input type="file" name="photo" value="<?= old('ItemImg'); ?>">
        <input type="submit" name="submit" value="submit">
    </form>
</div>

@include('button-effect3')


@endsection