<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 

class phoneController extends Controller
{
    public function invoice(request $request) 
    { 
    $row=[ 
        'name'=>$request->fullname, 
        'city'=>$request->city, 
        'phone'=>$request->phone, 
        'date'=>$request->date, 
        'email'=>$request->email, 
        'address'=>$request->address, 
        'productname'=>$request->productname, 
        'total'=>$request->total, 
    ]; 
    DB::table('invoice')->insert($row); 

    return view('invoice', ['inv' => $row]);
    } 

    public function checkout($id)
    {
      $phone=DB::table('products')
      ->where('id','=',$id)
      ->first();
      return view ('checkout',['phone'=>$phone]);
    }


    public function phonetype()
    {
        $phone=DB::table('products')->get();
        return view('phone',['phone'=>$phone]);
    }
}
