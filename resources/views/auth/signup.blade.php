@extends('layouts.main')

@section('content')
    <form method="post" action="{{route('auth.signup')}}" class='signup'>
        @csrf
        <!-- <div class="field">
            <label class="label">First Name</label>
            <input class="input" type="text" name="FirstName" value="<?= old('FirstName'); ?>">            
        </div> -->

        @error('fname')
            {{$message}}
        @enderror

        <!-- <div class="field">
            <label class="label">Last Name</label>
            <input class="input" type="text" name="LastName" value="<?= old('FirstName'); ?>">            
        </div> -->

        @error('lname')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Username</label>
            <input class="input" type="text" name="name" value="<?= old('username'); ?>">
        </div>

        @error('name')
            {{$message}}
        @enderror

        <div class="field">
            <label class="label">Email</label>
            <input class="input" type="email" name="email" value="<?= old('email'); ?>">
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

        <div class="field">
            <button class="button is-link">Submit</button>
        </div>
    </form>
@endsection