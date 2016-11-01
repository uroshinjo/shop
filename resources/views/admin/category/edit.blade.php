@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Edit category</span>
<br />
    {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCategoryController@update', $category->id]]) !!}
    
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', $category->description, ['class'=>'form-control', 'size' => '30x5']) !!}
    <br />
    {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
                    
 

        


@stop
