@extends('layouts.masterPage')
@section('content')
<h1>Products</h1>
<br />
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>Category</th>
        <th>Price</th>

    </tr>
</thead>
<tbody>
    
    @if($products)
            @foreach($products as $item)
                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->category->name}}</td>
                    <td>{{$item->price}}</td>
                    
                    
                </tr>
            @endforeach
        
        @endif
        </tbody>
</table>
@stop