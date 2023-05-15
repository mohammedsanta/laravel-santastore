@extends('layouts.main')

@section('content')
<div class="input_form">

    <form action="{{route('needs.store')}}" method="POST">
        @csrf

        <label for="">itemname</label>
        <input type="text" name="ItemName" value="<?= old('ItemName') ?>">

        @error('ItemName')
            {{$message}}
        @enderror

        <label for="">numberneed</label>
        <input type="number" name="NumberNeeds" value="<?= old('NumberNeeds') ?>">

        @error('NumberNeeds')
            {{$message}}
        @enderror

        <label for="">numbersold</label>
        <input type="number" name="NumberSold" value="<?= old('NumberSold') ?>">

        @error('NumberSold')
            {{$message}}
        @enderror

        <input type="submit" name="submit" value="submit">
    </form>
</div>

@include('button-effect3')


@endsection