@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Add category</span>
<br />
    {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoryController@store']) !!}
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', old('name'), ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', old('description'), ['class'=>'form-control', 'size' => '30x5']) !!}
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
