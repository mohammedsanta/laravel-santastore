@extends('layouts.main')


@section('content')

@if(session()->has('message'))
{{session()->get('message')}}
@endif
@endsection