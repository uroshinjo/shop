@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add product</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'AdminProductController@store', 'files'=>true]) !!}
    
    {!! Form::label('image', 'Image') !!}
    {!! Form::file('image',old('image')) !!}
    
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', old('description'), ['class'=>'form-control', 'size' => '30x5']) !!}
    
    {!! Form::label('price', 'Price') !!}
    {!! Form::number('price',old('price'),['class' => 'form-control','step'=>'0.1']) !!}
    
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', $categorys, old('category'), ['class'=>'form-control']) !!}
    

    <br />
    {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>
                {{ $error }}
            </li>
            @endforeach
        </ul>
    </div>
    @endif
@stop
