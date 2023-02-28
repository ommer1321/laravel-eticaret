<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class InvoiceOrderMail extends Mailable
{
    use Queueable, SerializesModels;
    
    public $order ,$totalAmount,$todayOrders,$order_products;
    
    /**
     * Create a new message instance.
     *
     * @return void
     */


    public function __construct($order,$totalAmount,$todayOrders,$order_products)
    {
        $this->totalAmount = $totalAmount;
        $this->todayOrders = $todayOrders;
        $this->order_products = $order_products;
        $this->order = $order;
    }

    public function build()
    {
        $subject = 'As Yazılım E-Fatura';
      
        return $this->subject($subject)->view('admin.order.invoice.index',[
            
            'totalAmount' => $this->totalAmount,
            'todayOrders' => $this->todayOrders,
            'order_products' => $this->order_products,
            'order' => $this->order,
        
        
        ]);
    }

}
