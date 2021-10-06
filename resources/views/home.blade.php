@extends('layouts.app')

@section('content')
    <h1>IT Website</h1>
@endsection

@section('sidebar')
    @parent
    <p>Appended Home</p>
@endsection
