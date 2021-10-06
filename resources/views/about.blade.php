@extends('layouts.app')

@section('content')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorem quam quasi quo vel! Debitis, harum porro. Accusantium atque dolore dolorem ea fuga necessitatibus non quaerat soluta vitae voluptas? Qui, totam.</p>
@endsection

@section('sidebar')
    @parent
    <p>Appended About</p>
@endsection
