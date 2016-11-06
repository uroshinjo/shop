@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add theme</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'ThemeController@store']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control']) !!}
    <br />
    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}

@stop
