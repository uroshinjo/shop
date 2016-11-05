@extends('layouts.masterPage')
@section('content')
<h1>Products</h1>
<br />

    
    @if($products)
            @foreach($products as $item)
                    <div class="col-md-3 portfolio-item" style="padding-bottom: 100px;">
                        
                        @if($item->image != null)
                        <center>
                            <a href="{{route('products.show', $item->id)}}">
                                <img class="img-responsive" src="data:image/png;base64,{{base64_encode($item->image)}}" alt="">
                            </a>
                        </center>
                        @endif
                        <h5><a href="{{route('products.show', $item->id)}}">{{$item->name}}</a></h5>
                        <div>
                            <h4>€ {{$item->price}}</h4>
                        </div>   

                    </div>

            @endforeach
        
        @endif

@stop

