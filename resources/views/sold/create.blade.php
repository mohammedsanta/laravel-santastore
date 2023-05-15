@extends('layouts.main')

@section('content')

<div class="input_form">

    <form action="{{route('sold.store')}}" method="POST">
        @csrf

        <label for="">sold_itemid</label>

        <select name="item_id" id="">

            {{$i = 1}}
                @foreach($Item as $table)
                <option value="{{$table->id}}">{{$i++ . ':' .   'Item Id:' . 'is->' . $table->id . "  |Item Name:" . 'is->' . $table->name }}</option>
                @endforeach
        </select>

        @error('itemid')
            {{$message}}
        @enderror

        <label for="">sold_customername</label>
        <select name="customer_id" id="">

            @foreach($Customer as $table)
            <option value="{{$table->id}}">{{'Customer Id:' . 'is->' . $table->id . "  |Customer Name:" . 'is->' . $table->name}}</option>
            @endforeach
        </select>

        @error('customerid')
        {{$message}}
        @enderror

        <input type="submit" name="submit" value="submit">

    </form>
</div>

@include('button-effect3')

@endsection