@extends('layouts.masterPageAdmin')
@section('content')

<span class="pageTitle">Edit category</span>
<br />
<div class="col-lg-6">
    {!! Form::open(['method'=>'PATCH', 'action'=>['AdminCategoryController@update', $category->id]]) !!}
    
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', $category->name, ['class'=>'form-control']) !!}
    
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', $category->description, ['class'=>'form-control', 'size' => '30x5']) !!}
    <br />
    {!! Form::submit('Save', ['class'=>'btn btn-success']) !!}
    
    {!! Form::close() !!}
                    
 </div>
<div class="col-lg-6">
    <a id="addFeatureButton" class="btn btn-success" onclick="displayAddFetureForm()">Add feature</a>
    <script>
        var values = "";
        function displayAddFetureForm(){
            $('#addFeature').show();
            $('#addFeatureButton').hide();
        }
        function displayAddValueForm(){
            $('#addValue').show();
            $('#addValueButton').hide();
        }
        function addToValuesString(){
            
            values+=$('#value').val();
            values+=";";
            $('#value').val("");
            $('#currentValues').text(values);
            $('#values').val(values);
        }
    </script>
    <div id="addFeature" style="display: none;">
        {!! Form::open(['method'=>'POST', 'action'=>'AdminCategoryController@addFeature']) !!}
        {!! Form::hidden('categoryid', $category->id)!!}
        {!! Form::hidden('values', null,['id'=>'values']) !!}
        
        {!! Form::label('name', 'Name of Feature') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
        <br />
        <a id="addValueButton" class="btn btn-info" onclick="displayAddValueForm()">Add Value</a>
        <div id="addValue" style="display: none;">
            {!! Form::label('value', 'Value') !!}
            {!! Form::text('value', null, ['class'=>'form-control']) !!}
            <a id="addToValueListButton" class="btn btn-link" onclick="addToValuesString()">+</a>
        </div>
        <span id="currentValues"></span>
        <br />
        <br />
        <br />
        {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
</div>
        


@stop
