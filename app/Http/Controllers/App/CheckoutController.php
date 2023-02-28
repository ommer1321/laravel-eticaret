<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  public function  index(){

        return view('app.checkout.index');


    }

    public function thanks(){
      return view('app.checkout.thank-you');



      
    }

    public function sendInvoice(){
return view('app.checkout.invoice');


    }
    
}
