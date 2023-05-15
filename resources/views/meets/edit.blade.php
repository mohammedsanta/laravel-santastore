@extends('layouts.main')

@section('content')
<div class="input_form">
    <form action="{{route('meets.update',$meet->id)}}" method="POST">
        @csrf
        @method('patch')
        <label for="">date</label>
        <input type="date" name="MeetDate" value="{{$meet->MeetDate}}">


        <label for="">location</label>
        <input type="text" name="MeetLocation" value="{{$meet->MeetLocation}}">


        <input type="submit" name="submit" value="submit">
    </form>
</div>
@endsection