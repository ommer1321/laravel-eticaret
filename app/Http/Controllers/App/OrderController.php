<?php

namespace App\Http\Controllers\App;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index(){

        $orders = Order::where('user_id',auth()->user()->id)->orderBy('created_at','DESC')->get();


        return view('app.order.index',compact('orders'));


        
    }

    
    public function details(int $order_id){

        $order = Order::where('id',$order_id)->first() ?? abort('404');
        
        if($order){
        
            $order_details = Orderitem::where('order_id',$order->id)->get();
        
        }



        return view('app.order.details',compact('order','order_details'));


        
    }
 

    

    
}
