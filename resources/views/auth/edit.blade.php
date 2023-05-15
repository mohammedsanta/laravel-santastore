@extends('layouts.main')

@section('content')
    <form method="post" action="{{route('auth.edit',$user->id)}}" class='signup'>
        @csrf
        <!-- <div class="field">
            <label class="label">First Name</label>
            <input class="input" type="text" name="FirstName" value="">            
        </div> -->

        @error('fname')
            {{$message}}
        @enderror

        <!-- <div class="field">
            <label class="label">Last Name</label>
            <input class="input" type="text" name="LastName" value="">            
        </div> -->

        @error('lname')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Username</label>
            <input class="input" type="text" name="name" value="{{$user->name}}">
        </div>

        @error('name')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Email</label>
            <input class="input" type="email" name="email" value="{{$user->email}}">
        </div>

        @error('email')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Password</label>
            <input class="input" type="password" name="password">            
        </div>

        @error('password')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Confirm password</label>
            <input class="input" type="password" name="password_confirmation">            
        </div>

        @error('password_confirmation')
            {{$message}}
        @enderror

        @if(auth() && auth()->user()->can('isAdmin'))

        <div class="field">
            <label class="label">Privilege</label>

            <select name="privilege" id="" class="select">
                <option value="user" @selected($user->role == 'user')>User</option>
                <option value="moderate" @selected($user->role == 'moderate')>Moderate</option>
                <option value="Admin" @selected($user->role == 'admin')>Admin</option>
            </select>         
        </div>

        @error('Privilege')
            {{$message}}
        @enderror

        @endif

        <div class="field">
            <button class="button is-link">Submit</button>
        </div>
    </form>
@endsection