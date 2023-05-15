@extends('layouts.main')

@section('content')
<div class='name-page'>
    <button class="btn" type="button">
    <strong>Customers</strong>
    <div id="container-stars">
        <div id="stars"></div>
    </div>

    <div id="glow">
        <div class="circle"></div>
        <div class="circle"></div>
    </div>
    </button>
</div>

@if(session('success'))
    {{session('success')}}
@endif

<a class="a-create" href="/customers/create">@include('button-effect1')</a>

<table>

    <thead>
        <th>customername </th>
        <th>customernubmer </th>
        <th>customeraccount </th>
        <th>customerrefere </th>
        <th>customerage </th>
        <th>customeraddress </th>
        <th>customeris </th>
        <th>customerabout </th>
        <th>customerpicture </th>
        <th style="width: 200px;">controller</th>
    </thead>

    <tbody>

        @if(!empty($Customers))

            @foreach($Customers as $customer)
                <tr>

                    <td>
                        <a href="/customers/profile/">a</a>
                    </td>
                    <td>{{$customer->CustomerNumber}}</td>
                    <td>{{$customer->CustomerAccount}}</td>
                    <td>{{$customer->CustomerReferer}}</td>
                    <td>{{$customer->CustomerAge}}</td>
                    <td>{{$customer->CustomerAddress}}</td>
                    <td>{{$customer->CustomerIs}}</td>
                    <td>{{$customer->CustomerAbout}}</td>
                    <td>
                        <div>
                            <img src="{{Storage::url($customer->photo)}}" style="width: 100px; height: 100px;">
                        </div>
                    </td>
                    <td style="display: flex; justify-content: center;align-items: center;gap: 20px;">
                        <a href="/customers/{{$customer->id}}/edit">@include('edit-button2')</a>
                        <form action="{{route('customers.destroy',$customer->id)}}" method="POST">
                            @csrf
                            @method('delete')
                            @include('delete-button1')
                        </form>                    
                    </td>

                </tr>
            @endforeach

        @else
                
            <td colspan="10">No Data Yet</td>

    
        @endif

    </tbody>
</table>




@endsection