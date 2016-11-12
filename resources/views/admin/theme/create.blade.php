@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add theme</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'ThemeController@store']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
    
    <br />{!! Form::label('pageBackground', 'Background color') !!}<br />
    <div style='background-color:#FF0000; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#FF0000', true) !!}
    <div style='background-color:#FF00FF; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#FF00FF', false) !!}
    
    <br />{!! Form::label('pageText', 'Text color') !!}<br />
    <div style='background-color:#FF0000; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageText', '#FF0000', true) !!}
    <div style='background-color:#FF00FF; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageText', '#FF00FF', false) !!}
    
    <br />{!! Form::label('menuBackground', 'Menu background color') !!}<br />
    <div style='background-color:#FF0000; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#FF0000', true) !!}
    <div style='background-color:#FF00FF; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#FF00FF', false) !!}
    
    <br />{!! Form::label('menuText', 'Menu text color') !!}<br />
    <div style='background-color:#FF0000; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuText', '#FF0000', true) !!}
    <div style='background-color:#FF00FF; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuText', '#FF00FF', false) !!}
    
    <br />
    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
    
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
@stop
