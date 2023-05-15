@extends('layouts.main')

@section('content')
<div class="input_form">
    <form action="{{route('meets.store')}}" method="POST">
        @csrf
        <label for="">meetsdate</label>
        <input type="date" name="MeetDate" id="">

        @error('MeetDate')
            {{$message}}
        @enderror
        
        <label for="">meetslocation</label>
        <input type="text" name="MeetLocation" id="">

        @error('MeetLocation')
            {{$message}}
        @enderror

        <input type="submit" name="submit" value="submit">
    </form>
</div>

@include('button-effect3')


@endsection