<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Catagory;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $todayDate = Carbon::now()->format('d-m-Y');
        $thisMonthDate = Carbon::now()->format('m');
        $thisYearDate = Carbon::now()->format('Y');
      
        $ordersDate = Order::pluck('created_at');
        
        $allOrders = $ordersDate->count();
        $allCategory = Catagory::count();
        $allBrand = Brand::count();
        $allProduct = Product::count();

        $allUser = User::where('role_as','0')->count();
        $allAdmin = User::where('role_as','1')->count();
        $adminsAndUsers = User::count(); 

        $todayOrders=0;   
        $yearOrders=0; 
        $monthOrders=0; 
        


        
        // Today Order Calculating   
        foreach ($ordersDate as $order) {
            if($order->format('d-m-Y') == $todayDate){
                $todayOrders++;

            }
        }
        //   This Month Order Calculating
       
        foreach ($ordersDate as $order) {
            if($order->format('m') == $thisMonthDate){
                $monthOrders++;

            }
        }
        
        //This Year Order Calculating   
             
        foreach ($ordersDate as $order) {
            if($order->format('Y') == $thisYearDate){
                $yearOrders++;

            }
        }


        //  
       
       
        
          

        return view('admin.dashboard/index',
 compact('allUser','allAdmin','adminsAndUsers','ordersDate', 'allOrders','todayOrders','monthOrders','yearOrders','allProduct','allCategory','allBrand'));
    }
}
