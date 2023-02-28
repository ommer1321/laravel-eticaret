<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\InvoiceOrderMail;
use App\Models\Order;
use App\Models\Orderitem;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Enum;

class OrderController extends Controller
{
    public function index(Request $request)
    {



        $todayOrders = Carbon::now()->format('Y-m-d');

        $orders = Order::when($request->status == 'all' && $request->date != null, function ($q) use ($request) {

            return $q->whereDate('created_at', $request->date);
        })->when($request->date != null, function ($q) use ($request) {

            return $q->whereDate('created_at', $request->date);
        }, function ($q) use ($todayOrders) {

            return $q->whereDate('created_at', $todayOrders);
        })->when($request->status != null && $request->status != 'all', function ($q) use ($request) {

            return $q->where('status_message', $request->status);
        })->paginate(5);


        if ($orders) {

            return view('admin.order.index', compact('orders'));
        } else {

            return view('admin.order.index', compact('orders'));
        }
    }






    public function  details($order_id)
    {

        $totalAmount = 0;
        $order = Order::where('id', $order_id)->first() ?? abort('404');

        if ($order) {
            $order_products = Orderitem::where('order_id', $order->id)->get();
        }

        return view('admin.order.detail', compact('order', 'order_products', 'totalAmount'));
    }





    public function  update(Request $request, $order_id)
    {


        $order = Order::where('id', $order_id)->first() ?? abort('404');
        if ($order) {

            $res = $order->update([

                'status_message' => $request->status,

            ]);

            if ($res) {
                return redirect()->route('detail.orders.admin', $order->id)->with('success', 'Başarılı Bir Şekilde Güncellendi');
            } else {
                return redirect()->route('detail.orders.admin', $order->id)->with('unsuccess', 'Hopss!! Bir Aksilik Çıktı Güncellenemedi');
            }
        }
    }





    public function  invoiceView($order_id)
    {
        $order = Order::where('id', $order_id)->first() ?? abort('404');
        $totalAmount = 0;
        $todayOrders = Carbon::now()->format('Y-m-d');

        if ($order) {
            $order_products = Orderitem::where('order_id', $order->id)->get();

            return view('admin.order.invoice.index', compact('order', 'todayOrders', 'order_products', 'totalAmount'));
        }
    }




    public function  generateInvoice($order_id)
    {
        $order = Order::where('id', $order_id)->first() ?? abort('404');
        $totalAmount = 0;
        $todayOrders = Carbon::now()->format('Y-m-d');
        if ($order) {

            $order_products = Orderitem::where('order_id', $order->id)->get();


            $data = [

                'order' => $order,
                'todayOrders' => $todayOrders,
                'order_products' => $order_products,
                'totalAmount' => $totalAmount,

            ];


            $pdf = Pdf::loadView('admin.order.invoice.index', $data);

            return $pdf->download('Fatura' . $order_id . '-' . $todayOrders . '.pdf');
        }
    }







    public function sendInvoice($order_id)
    {
  try {
        $totalAmount = 0;
        $todayOrders = Carbon::now()->format('Y-m-d');
       
        $order = Order::where('id', $order_id)->first();
    

            if ($order) {

       $order_products = Orderitem::where('order_id', $order->id)->get();

                $sended = Mail::to("$order->email")->send(new InvoiceOrderMail($order,$totalAmount,$todayOrders,$order_products));
              
                if ($sended) {

                    return redirect()->route('detail.orders.admin', $order->id)->with('success',  $order->fullname . ' Adlı Müşteriye Mail Gönderildi');
                }



              
            }
          
        } catch (\Exception $e) {
            return redirect()->route('detail.orders.admin', $order->id)->with('message', 'Bir Sorun Oluştu');
        }
    }
}
