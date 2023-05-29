@extends('layouts.app')
@section('title','invoice')
@section('content')

<style>
    body{
        color:black;
    }
</style>

<div class="card">
  <div class="card-body mx-4">
    <div class="container">
      <center><p class="my-5 mx-5 text-success" style="font-size: 30px;">Thank for your purchase</p></center>
      <div class="row">
        <ul class="list-unstyled">
          <li class="text-black">{{$inv['name']}}</li>
          <li class="text-muted mt-1"><span class="text-black">Invoice</span> # 12345</li>
          <li class="text-black mt-1">{{$inv['date']}}</li>
        </ul>
        <hr>
        <div class="col-xl-10">
          <p>Product Name</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">{{$inv['productname']}}
          </p>
        </div>
        <hr>
      </div>
      <div class="row">
        <div class="col-xl-10">
          <p>Product Price</p>
        </div>
        <div class="col-xl-2">
          <p class="float-end">SR{{$inv['total']}}
          </p>
        </div>
        <hr>
      </div>
     
      <div class="row text-black">

        <div class="col-xl-12">
          <p class="float-end fw-bold">Total: SR{{$inv['total']}}
          </p>
        </div>
        <hr style="border: 2px solid black;">
      </div>
      <div class="text-center" style="margin-top: 90px;">
        <a><u class="text-info">View in browser</u></a>
        <p>Thank You For Choosing Our Store </p>
      </div>

    </div>
  </div>
</div>


@endsection