@extends('layouts.main')

@section('content')
<div class="input_form">

    <form action="{{route('customers.store')}}" method="POST" enctype="multipart/form-data">

        @csrf

        <label for="">customername</label>
        <input type="text" name="CustomerName" value="<?= old('CustomerName') ?>">

        @error('CustomerName')
        {{$message}}
        @enderror

        <label for="">customernubmer</label>
        <input type="text" name="CustomerNumber" value="<?= old('CustomerNumber') ?>">

        @error('CustomerNumber')
        {{$message}}
        @enderror

        <label for="">customeraccount</label>
        <input type="text" name="CustomerAccount" value="<?= old('CustomerAccount') ?>">

        @error('CustomerAccount')
        {{$message}}
        @enderror

        <label for="">customerrefere</label>
        <input type="text" name="CustomerReferer" value="<?= old('CustomerReferer') ?>">

        @error('CustomerReferer')
        {{$message}}
        @enderror

        <label for="">customerage</label>
        <input type="text" name="CustomerAge" value="<?= old('CustomerAge') ?>">

        @error('CustomerAge')
        {{$message}}
        @enderror

        <label for="">customeraddress</label>
        <input type="text" name="CustomerAddress" value="<?= old('CustomerAddress') ?>">

        @error('CustomerAddress')
        {{$message}}
        @enderror

        <label for="">customeris</label>
        <input type="text" name="CustomerIs" value="<?= old('CustomerIs') ?>">

        @error('CustomerIs')
        {{$message}}
        @enderror

        <label for="">customerabout</label>
        <input type="text" name="CustomerAbout" value="<?= old('CustomerAbout') ?>">

        @error('CustomerAbout')
        {{$message}}
        @enderror

        <label for="">customerpicture</label>
        <input type="file" name="photo">



        <input type="submit" name="submit" value="submit">
    </form>
</div>

@include('button-effect3')


@endsection