@extends('layouts.main')

@section('content')
<div class="input_form">

    <form action="{{route('customers.update',$customer->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('patch')
        <label for="">customername</label>
        <input type="text" name="CustomerName" id="" value="{{$customer->CustomerName}}">

        <label for="">customernubmer</label>
        <input type="text" name="CustomerNumber" id="" value="{{$customer->CustomerNumber}}">

        <label for="">customeraccount</label>
        <input type="text" name="CustomerAccount" id="" value="{{$customer->CustomerAccount}}">

        <label for="">customerrefere</label>
        <input type="text" name="CustomerReferer" id="" value="{{$customer->CustomerReferer}}">

        <label for="">customerage</label>
        <input type="text" name="CustomerAge" id="" value="{{$customer->CustomerAge}}">

        <label for="">customeraddress</label>
        <input type="text" name="CustomerAddress" id="" value="{{$customer->CustomerAddress}}">

        <label for="">customeris</label>
        <input type="text" name="CustomerIs" id="" value="{{$customer->CustomerIs}}">

        <label for="">customerabout</label>
        <input type="text" name="CustomerAbout" id="" value="{{$customer->CustomerAbout}}">

        <label for="">Picture</label>
        <input type="file" name="photo">


        <input type="submit" name="submit" value="submit">
    </form>
</div>
@endsection