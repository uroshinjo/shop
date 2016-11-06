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
                        actions
                    
                    </td>
                </tr>
            @endforeach
        
        @endif
        </tbody>
</table>

@stop

