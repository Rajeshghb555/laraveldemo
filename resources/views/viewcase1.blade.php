@extends('mylay.app1')

@section('title', 'About Us')

@section('sidebar')
    @parent

    <h1>This is appended to the master sidebar About Us.</h1>
@endsection

@section('content')
    <p>This is my body content 23.</p>
@endsection