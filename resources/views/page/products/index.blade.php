@extends('layouts.masterPage')
@section('content')
<h1>Products</h1>
<br />

    
    @if($products)
            @foreach($products as $item)
                    <div class="col-md-3 portfolio-item" style="border-bottom:1px solid #FFFFFF;">
                        <h3><a href="">{{$item->name}}</a></h3>
                        <center>
                            <a href="">
                                <img class="img-responsive" src="" alt="">
                            </a>
                        </center>	
                        <div>
                            <h4>€ {{$item->price}}</h4>
                        </div>   
                            <p>{{$item->description}}</p>
                    </div>

            @endforeach
        
        @endif

@stop

