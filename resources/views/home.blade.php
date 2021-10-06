@extends('layouts.app')

@section('content')
    <h1>IT Website</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ab accusamus amet animi beatae, dolor dolorem earum ex harum iure libero, maxime necessitatibus quas quasi sequi, similique tenetur totam voluptas?</p>
@endsection

@section('sidebar')
    @parent
    <p>Appended Home</p>
@endsection
