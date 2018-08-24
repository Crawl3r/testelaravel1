@extends('layout')

@section('content')
    @foreach($users as $user)
        <p>{{ $user->id }} - {{ $user->name }}</p>
    @endforeach
@stop