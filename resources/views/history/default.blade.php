@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>History</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>


<table>

    <thead>
        <th>action_id</th>
        <th>action_name</th>
        <th>action_date</th>
        <th>action_privilege</th>
    </thead>

    <tbody>

        @if(!empty($histories))

            @foreach($histories as $history)

                <tr>
                    <td>{{$history->id}}</td>
                    <td>{{$history->name}}</td>
                    <td>{{$history->date}}</td>
                    <td>{{$history->privilege}}</td>
                </tr>

            @endforeach

        @else
            <td colspan="7">No Data Yet</td>
        @endif

    </tbody>

</table>
@endsection