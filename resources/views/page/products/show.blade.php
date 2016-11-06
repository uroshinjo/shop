@extends('layouts.masterPage')
@section('content')
<br />

<style>
    .inputPadding{
        padding: 5px;
        margin-left:15px;
        margin-top:5px;
        min-width: 150px;
    }
</style>
<div class="row">
     <div class="col-md-4 portfolio-item" style="padding-bottom: 100px;">
         <img class="img-responsive" src="data:image/png;base64,{{base64_encode($product->image)}}" alt="">
     </div>
    <div class="col-md-8 portfolio-item">
        <h3>{{$product->name}}</h3>
        <h4>€ {{$product->price}}</h4>
        
        {!! Form::open(['method'=>'POST', 'action'=>'BasketController@create']) !!}
        <table>
        @if($productFeatures)
            @foreach($productFeatures as $item)
            <tr>
                <td>{{$item->name}}     </td>         
                <td>{!! Form::select($item->name, $item->arrayValues, null, ['placeholder' => 'Select', 'class' => 'inputPadding']) !!}</td>
            </tr>
            @endforeach      
        @endif
        </table>

        
        {!! Form::close() !!}
        <br />
        <a href="" class="btn btn-success">Add to basket</a>
    </div>
</div>
<div class="row">
     <div class="col-md-12 portfolio-item" style="padding-bottom: 100px;">
         {{$product->description}}
     </div>

</div>

<div class="row">
    <h4>Similar products</h4>
    <br />
    <center>
    @if($simillarProducts)
            @foreach($simillarProducts as $item)
                    <div class="col-md-3 portfolio-item" style="padding-bottom: 100px;">
                        
                        @if($item->image != null)
                        <center>
                            <a href="{{route('products.show', $item->id)}}">
                                <img style="width:150px;" class="img-responsive" src="data:image/png;base64,{{base64_encode($item->image)}}" alt="">
                            </a>
                        </center>
                        @endif
                        <h5><a href="{{route('products.show', $item->id)}}">{{$item->name}}</a></h5>
                        <div>
                            <h4>€ {{$item->price}}</h4>
                        </div>   
                        <a href="{{route('products.show', $item->id)}}" class="btn btn-primary">View</a>

                    </div>

            @endforeach
        
        @endif
    </center>
</div>

@stop

