@extends('layouts.app')

@section('content')
    <h1>About</h1>
@endsection

@section('sidebar')
    @parent
    <p>Appended About</p>
@endsection
