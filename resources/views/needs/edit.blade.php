@extends('layouts.main')

@section('content')
<div class="input_form">

    <form action="{{route('needs.update',$need->id)}}" method="POST">
        @csrf
        @method('patch')
        <label for="">itemname</label>
        <input type="text" name="ItemName" id="" value="{{$need->ItemName}}">

        <label for="">numberneed</label>
        <input type="number" name="NumberNeeds" id="" value="{{$need->NumberNeeds}}">

        <label for="">numbersold</label>
        <input type="number" name="NumberSold" id="" value="{{$need->NumberSold}}">

        <input type="submit" name="submit" value="submit">
    </form>
</div>
@endsection