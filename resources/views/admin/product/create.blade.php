@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add product</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'AdminProductController@store', 'files'=>true]) !!}
    
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('image') !!}
    
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'size' => '30x5']) !!}
    
    {!! Form::label('price', 'Price') !!}
    {!! Form::number('price',null,['class' => 'form-control','step'=>'0.1']) !!}
    
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', $categorys, null, ['class'=>'form-control']) !!}
    

    <br />
    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}

@stop
