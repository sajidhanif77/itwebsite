@extends('layouts.app')

@section('content')
    <h1>Vendor Partnership</h1>
    <p>We believe in a collaborative approach, that is why we have a vendor partnership program to get other vendors on
        board so that we can use their services in regions where we have no or limited presence. Same way we will
        appreciate helping you get the services delivered where we have skilled Engineers and technicians already
        providing services as Field Engineers.
    </p>
    {!! Form::open(['url' => 'contact/submit']) !!}
    <div class="form-group">
        {{Form::label('companyname', 'Company Name')}}
        {{Form::text('companyname', '',['class' => 'form-control', 'placeholder' => 'Company Name'])}}
    </div>
    <div class="form-group">
        {{Form::label('companyemail', 'Company E-Mail')}}
        {{Form::text('companyemail', '', ['class' => 'form-control', 'placeholder' => 'Company Email'])}}
    </div>
    <div class="form-group">
        {{Form::label('companywebsite', 'Company Website')}}
        {{Form::text('companywebsite', '', ['class' => 'form-control', 'placeholder' => 'Company Website'])}}
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
