@extends('layouts.app')
 @section('title','Phone')
 @section('content')
     
     <div class="container">
     @foreach ($phone as $item)
         <div class="card" >
          
          <div class="card-header" style="background:#E3EBEE">
            <h1 class="text-center text-black" >{{$item->name}}</h1>
          </div>
        
           <div class="card-body border-1">
             <div class="row">
                <div class="col-sm-3">
                 <img src='img/{{$item->img}}' height="200">
                </div>

                <div class="col-sm-6">
                 <h1 class="text-dark">{{$item->name}}</h1>
                 <small class="text-primary">{{$item->specifications}}</small>
                </div>

                <div class="col-sm-3">
                  <h4 class="text-danger">{{$item->price}}</h4>
                    <hr>
                    <br>
                    <div>  <a class="btn btn-success" href="checkout/{{$item->id}}">Buy Now</a>
                </div>
             </div>
           </div>
          </div>
        </div> 

          
           @endforeach
     </div>
    
@endsection