@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add category</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoryController@store']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class'=>'form-control', 'size' => '30x5']) !!}
    <br />
    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}

@stop
