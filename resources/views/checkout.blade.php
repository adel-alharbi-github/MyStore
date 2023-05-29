@extends('layouts.app')
@section('title','checkout')
@section('content')

<div class="container">
   
  
    <div class="row">
      <div class="col-md-4 order-md-2 mb-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-muted">Your cart</span>
          <span class="badge badge-secondary badge-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-condensed">
            <div>
              <h6 class="my-0">Product Details</h6>
              <small class="text-muted">{{$phone->specifications}}</small>
            </div>
            <span class="text-muted">{{$phone->price}}</span>
          </li>
        
          <li class="list-group-item d-flex justify-content-between">
            <span>Total (SR)</span>
            <strong>{{$phone->price}}</strong>
          </li>
        </ul>
  
        
      </div>
      <div class="col-md-8 order-md-1">
        <h4 class="alert alert-secondary mb-3 text-dark">{{$phone->name}}</h4>

        <div class="container"> 
          <form action="{{route('invoice')}}" method="POST"> 
            @csrf 
            <input type="hidden" id="productname" name="productname" value={{$phone->name}}> 
            <input type="hidden" id="total" name="total" value={{$phone->total}}> 
          <div class="row"> 
            <div class="col"> 
            <label class="text-dark" for="fullname">Full Name</label> 
            <input type="text" id="fullname" name="fullname" class="form-control" required> 
            </div> 
            <div class="col"> 
            <label class="text-dark" for="city">City</label> 
            <select id="city" name="city" class="form-control" required> 
                <option >Riyadh</option> 
                <option >Jeddah</option> 
                <option >Dammam</option> 
            </select> 
            </div> 
            <div class="col"> 
            <label class="text-dark" for="date">Purchase Date</label> 
            <input type="date" id="date" name="date" class="form-control" required> 
            </dev>
          </dev> 
          <div class="row"> 
            <div class="col"> 
            <label class="text-dark" for="phone">Phone Number</label> 
            <input type="phone" id="phone" name="phone" class="form-control" required> 
            </div> 
            <div class="col"> 
            <label class="text-dark" for="email">E-mail</label> 
            <input type="email" id="email" name="email" class="form-control" required> 
            </div> 
            <div class="col"> 
            <label class="text-dark" for="adress">Address</label> 
            <input type="address" id="address" name="address" class="form-control" required> 
            </div> 
          </div> 
          <div class="row m-5 text-center"> 
            <div class="col"> 
            <button type="submit" class="btn btn-success">Confirmation</button> 
            </div>    
        </div> 
   </form> 
</div>

 @endsection