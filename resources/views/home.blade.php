@extends('layouts.app')

@section('content')
<link rel="stylesheet" type="text/css" href="../css/home.css">
<div class="container">
    <div class="row">
        <div class="col-md-8">    
            @foreach ($products as $product)
            <div class="col-md-3">
                <div class="well">
                    {{ $product -> name }}
                     <div>
                           <img src="../img/a.png " width="100" height="100">
                     </div>
                     <span class="badge">{{ $product -> stock }}</span>
                    <hr>
                     {{ $product -> description }}
                     <button type="button" class="btn btn-primary"  id="add">$ {{ $product -> price }}</button>
                     
                     <a href="/addtocart/{{ $product->id }}">
                        <button type="button" class="btn btn-success" id="add">Add to cart</button>
                     </a>

                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-4">  
            <div class="panel panel-default">
                <div class="panel-heading">
                    Werpa
                </div>
                <div class="panel-body">
                    @foreach ($cartItems as $cartItem)
                        <div class="well">
                            {{ $cartItem->name }}
                                
                            <input type="number" name="quantity" value="{{ $cartItem->quantity }}" id="input">
                            
                            {{ $cartItem->amount}}
                            
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
