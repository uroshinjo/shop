@extends('layouts.masterPageAdmin')
@section('content')
<table style="width:100%;">
    <tr><td>
            <span class="pageTitle">Themes</span>
        </td><td>
  <a href="{{ url('admin/theme/create') }}" style="float:right" class="btn btn-success">Add theme</a>
  </td></tr>
</table>
<br />
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Active</th>
        <th colspan="2">Actions</th>
    </tr>
</thead>
<tbody>
    
    @if($themes)
            @foreach($themes as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->active}}</td> 
                        <td style="width:25px;">    

                                        {!! Form::open(['method'=>'PATCH', 'action'=>['ThemeController@setActiveTheme', $item->id]]) !!}
                                        {!! Form::submit('Set', ['class'=>'btn btn-warning']) !!}   
                                        {!! Form::close() !!}

                    </td>
                    <td style="width:25px;">    
                        <a class="deleteBtn" onclick="showConfirmDeletePopup({{$item->id}})"></a>

                        <div class="popUpConfirm" id="confirmPopup_{{$item->id}}">
                            <div class="warningQuestion">Are you sure you want to delete this item?</div>
                            <table style="float: right; margin-top:30px;">
                                <tr>
                                    <td>
                                        {!! Form::open(['method'=>'DELETE', 'action'=>['ThemeController@destroy', $item->id]]) !!}
                                        {!! Form::submit('Delete', ['class'=>'btn btn-warning']) !!}   
                                        {!! Form::close() !!}
                                    </td>
                                    <td>
                                        <button class="btn btn-link" onclick="hideConfirmDeletePopup({{$item->id}})">Cancel</button>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    
                    </td>
                </tr>
            @endforeach
        
        @endif
        </tbody>
</table>

@stop

