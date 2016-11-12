@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add theme</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'ThemeController@store']) !!}
    {!! Form::label('name', 'Name') !!}

    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}

    {!! Form::text('name', 'New theme', ['class'=>'form-control']) !!}

    
    <br />{!! Form::label('pageBackground', 'Background color') !!}<br />
    <div style='background-color:#E74C3C; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#E74C3C', true) !!}
    <div style='background-color:#9B59B6; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#9B59B6', false) !!}
    <div style='background-color:#2980B9; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#2980B9', false) !!}
    <div style='background-color:#16A085; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#16A085', false) !!}
    <div style='background-color:#34495E; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#34495E', false) !!}
        <div style='background-color:#FFFFFF; border:1px solid #333; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageBackground', '#FFFFFF', false) !!}
    
    <br />{!! Form::label('pageText', 'Text color') !!}<br />
    <div style='background-color:#333333; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('pageText', '#333333', true) !!}
    <div style='background-color:#ffffff; display:inline-block; border:1px solid #333; width:15px; height:15px;'></div>
    {!! Form::radio('pageText', '#ffffff', false) !!}
    
    <br />{!! Form::label('menuBackground', 'Menu background color') !!}<br />
    <div style='background-color:#E74C3C; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#E74C3C', true) !!}
    <div style='background-color:#9B59B6; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#9B59B6', false) !!}
    <div style='background-color:#2980B9; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#2980B9', false) !!}
    <div style='background-color:#16A085; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#16A085', false) !!}
    <div style='background-color:#34495E; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#34495E', false) !!}
        <div style='background-color:#FFFFFF; border:1px solid #333; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuBackground', '#FFFFFF', false) !!}
    
    <br />{!! Form::label('menuText', 'Menu text color') !!}<br />
    <div style='background-color:#333333; display:inline-block; width:15px; height:15px;'></div>
    {!! Form::radio('menuText', '#333333', true) !!}
    <div style='background-color:#FFFFFF; display:inline-block; border:1px solid #333; width:15px; height:15px;'></div>
    {!! Form::radio('menuText', '#FFFFFF', false) !!}
    
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
