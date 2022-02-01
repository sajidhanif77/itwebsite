@extends('layouts.app')

@section('content')
    <h2>Join Our Global Network of Independent Contractors</h2>
    <p>Please fill out this form to get registered in our databse of Global Independent Contractors. We will get in
        touch with you for any suitable IT opportunity in your area based on your skill set.
    </p>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('firstname', 'First Name')}}
        {{Form::text('firstname', '',['class' => 'form-control', 'placeholder' => 'First Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('lastname', 'Last Name')}}
        {{Form::text('lastname', '',['class' => 'form-control', 'placeholder' => 'Last Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('mobile', 'Mobile')}}
        {{Form::text('mobile', '', ['class' => 'form-control', 'placeholder' => 'Mobile'])}}
    </div>
    <div class="form-group">
        {{Form::label('email', 'Email')}}
        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('message', 'Message')}}
        {{Form::textarea('message', '', ['class' => 'form-control', 'placeholder' => 'Tell us about your Company'])}}
    </div>
    <div>
        {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    </div>
    {!! Form::close() !!}
@endsection

@section('sidebar')
    @parent
    <p>Appended Contact</p>
@endsection
