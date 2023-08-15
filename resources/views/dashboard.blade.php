@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1>Welcome {{ Auth::user()->email;}}</h1>
@endsection