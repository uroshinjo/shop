@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Edit category</span>
<br />
    {!! Form::open(['method'=>'PATCH', 'action'=>['AdminProductController@update', $product->id]]) !!}
    
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $product->name, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', $product->description, ['class'=>'form-control', 'size' => '30x5']) !!}
    
    {!! Form::label('price', 'Price') !!}
    {!! Form::number('price', $product->price,['class' => 'form-control','step'=>'0.1']) !!}
    
    {!! Form::label('category', 'Category') !!}
    {!! Form::select('category', $categorys, $product->category_id, ['class'=>'form-control']) !!}
    <br />
    {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
                    
 

        


@stop