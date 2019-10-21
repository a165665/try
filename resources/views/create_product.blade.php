@extends('layouts.app')

@section('content')

<div class="container">

    {{ Form::open(['action' => 'ProductController@store', 'method' =>'POST' ]) }}
    <div class ="form-group">
        {{Form::label('name', 'ProductName')}}
        {{Form::text('name', '',['class'=>'form-control','placeholder'=>'Name']) }}
    </div>
    <div class ="form-group">
            {{Form::label('price', 'Price')}}
            {{Form::text('price', '',['class'=>'form-control','placeholder'=>'Price']) }}
    </div>
    <div class ="form-group">
            {{Form::label('type', 'Type')}}
            {{Form::text('type', '',['class'=>'form-control','placeholder'=>'Type']) }}
    </div>
    {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
    

    {{ Form::close() }}

</div>
{{-- {{$dishes->links()}} --}}  

@endsection