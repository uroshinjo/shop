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
    <br/>
    @if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div> 
    @endif
    
 </div>
<div class="col-lg-6">
    
   
    <script>
        var features = {
            value: []
        };
        var stevec = 1;
        
        function displayAddFetureForm(){
            $('#addFeature').show();
            $('#addFeatureButton').hide();
        }
        function displayAddValueForm(){
            $('#addValue').show();
            $('#addValueButton').hide();
        }
                
        function addToFeaturesJson(){
            features.value.push({
                "id" : String(stevec++),
                "valueName" : $('#value').val()
            });
            
            var obj = JSON.stringify(features);
            $('#currentValues').append("<li>"+$('#value').val()+ "</li>");
            $('#value').val("");
            $('#values').val(obj);
        }
    </script>
    <h3>Set Features</h3>
    <table class="table">
        <tr>
            <th>Feature Name</th>
            <th>Values</th>
        </tr>
        <tbody>
            @if($categoryFeatures)
                @foreach($categoryFeatures as $item)
                <tr>
                    <td>{{ $item->name }}</td>
                    <td>
                        <ul type="circle">
                        @foreach($item->arrayValues as $one)
                            {{ $one}}
                        @endforeach 
                        </ul>
                        
                    </td>
                </tr>
                @endforeach
            @endif
        </tbody>
    </table>
    
    <a id="addFeatureButton" class="btn btn-success" onclick="displayAddFetureForm()">Add feature</a>
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
            <a id="addToValueListButton" class="btn btn-link" onclick="addToFeaturesJson()">+</a>
        </div>
        <ul id="currentValues"></ul>
        <br />
        
        {!! Form::submit('Add', ['class'=>'btn btn-success']) !!}

        {!! Form::close() !!}
    </div>
</div>
        


@stop
