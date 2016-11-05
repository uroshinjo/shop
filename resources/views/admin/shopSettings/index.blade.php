@extends('layouts.masterPageAdmin')
@section('content')
<h1>Shop settings</h1>
@if($settings)
    @foreach($settings as $item)
    {!! Form::open(['method'=>'POST', 'action'=>'ShopSettingsController@store']) !!}
    {!! Form::label('name', 'Shop name') !!}
    {!! Form::text('name', $item->name, ['class'=>'form-control']) !!}
    
    {!! Form::label('adress', 'Adress') !!}
    {!! Form::text('adress', $item->adress, ['class'=>'form-control']) !!}
    
    {!! Form::label('phone', 'Phone') !!}
    {!! Form::text('phone', $item->phone, ['class'=>'form-control']) !!}
    
    {!! Form::label('facebook', 'Facebook page') !!}
    {!! Form::text('facebook', $item->facebook, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', $item->description, ['class'=>'form-control', 'size' => '30x5']) !!}
    <br />
    {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
    @endforeach
   @endif
@stop

