<?php

namespace App\Http\Livewire\App\Checkout;

use App\Mail\CheckoutMail;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Illuminate\Support\Str;

class Index extends Component
{
    public $totalPrice = 0,$mail, $cart, $cartItem, $fullname, $email, $phone, $pincode, $address, $validetedData, $payment_id = null, $payment_mode, $productNotSelling = [],  $productSelling = [];



    public function rules()
    {
        return [
            'fullname' => 'required|string|max:121',
            'email' => 'required|email|max:121',
            'phone' => 'required|integer',
            'pincode' => 'required|integer',
            'address' => 'required|string|max:500',

            //ommer1453 phone ve pincode max verilmiyor  
            //payment id null sımdılkık 
        ];
    }



    public function placeOrder()
    {


        $this->validetedData = $this->validate();
        $this->mail =  $this->validetedData['email'];

        if (Cart::where('user_id', auth()->user()->id)) {



            if ($this->validetedData) {
                $order = Order::create([
                    'user_id' => auth()->user()->id,
                    'fullname' => $this->validetedData['fullname'],
                    'email' => $this->validetedData['email'],
                    'phone' => $this->validetedData['phone'],
                    'pincode' => $this->validetedData['pincode'],
                    'address' => $this->validetedData['address'],
                    'tracking_no' => Str::random(10) . auth()->user()->id,
                    'status_message' => 'ın progress',
                    'payment_mode' => $this->payment_mode,
                    'payment_id' => $this->payment_id,


                ]);
            }


            if ($order) {
                foreach ($this->cart as $cartitem) {

                    $orderitem = Orderitem::create([

                        'order_id' => $order->id,
                        'product_id' => $cartitem->product_id,
                        'product_color_id' => $cartitem->product_color_id,
                        'quantity' => $cartitem->quantity,
                        'price' => $cartitem->quantity * $cartitem->product->selling_price,

                    ]);

                    if ($orderitem) {

                        $decrementProduct = Product::where('id', $cartitem->product_id)->first();

                        if ($decrementProduct) {

                            //sayı azaltma 

                            $res = $decrementProduct->decrement('quantity', $cartitem->quantity);

                            if ($res) {

                                //sayı azaltma 
                                $s = $decrementProduct->productColor()->where('id', $cartitem->product_color_id)->decrement('quantity', $cartitem->quantity);
                            }
                        }
                    }
                }
                //sadece kontrol yapmak için döndürülüyor true  
                return true;
            }
        } else {

            //ommer1453 sepet boş iken sipariş vermede 404 hata agelıor
            redirect()->route('index.home');
        }
    }


    public function sellProduct()
    {

        foreach ($this->cart as $key => $cartitem) {

            //ürüün var olup olmadığının kontrolü var ise buraya giriyor

            if ($cartitem->quantity <= $cartitem->productColor->quantity) {

                //var ise buraya giriyor  
                $this->productSelling[$key] = $cartitem->id;
            } else {
                //yok ise buraya giriyor ve satılmayanlar productNotSeling dizisine ekleniyor
                $this->productNotSelling[$key] = $cartitem->id;
            }
        }

        // satılamayan dizisi doluluğu kontolü 

        if ($this->productNotSelling != null) {

            foreach ($this->productNotSelling as $key => $productNotSelling_item) {

                $notselling = $this->cart->where('id', $productNotSelling_item)->first();

                if ($notselling) {

                    if (!Wishlist::where('user_id', $notselling->user_id)->where('product_id', $notselling->product_id)->exists()) {




                        $notselling_Result = Wishlist::create([

                            'user_id' => $notselling->user_id,
                            'product_id' => $notselling->product_id,

                        ]);

                        if ($notselling_Result) {


                            $notselling_deleted = $notselling->delete();
                            unset($this->productNotSelling[$key]);


                            if ($notselling_deleted) {


                                if ($this->productNotSelling == null) {

                                    return redirect()->route('index.checkout')->with('productNotSelling', 'Sepetinizdeki Ürünlerden Bazıalrı Geçersizdir İptal Edilen Ürünleriniz Sepetinizden Kaldırıldı Ve Favorilediğiniz Ürünlere Eklendi.');
                                }
                            } else {


                                $this->dispatchBrowserEvent('message', [
                                    'text' => ' <i  style="color: red" class=" icon-cancel ">Geçersiz Ürün Silinmedi</i>',

                                ]);
                            }
                        } else {
                            $this->dispatchBrowserEvent('message', [
                                'text' => ' <i  style="color: red" class=" icon-cancel ">Ürün Oluşturulamadı Ürün</i>',

                            ]);
                        }
                    } else {

                        $notselling_deleted = $notselling->delete();
                        unset($this->productNotSelling[$key]);

                        if ($this->productNotSelling == null) {

                            return false;
                        }
                    }
                    //ve dolu ise yapılacak işlemler alanı
                }
            }
        }

        return true;
    }


    public function codOrder()
    {
        $this->payment_mode = 'Cash On Delivery';
        $this->validetedData = $this->validate();
        $this->sellProduct();


        if ($this->sellProduct() != false) {



            $codOrder =  $this->placeOrder();


            if ($codOrder) {

            // Mail Gönderme alanı
                $sended = Mail::to($this->mail)->send(new CheckoutMail());

                if($sended){

                    $this->dispatchBrowserEvent('message', [
                        'text' => ' <i  style="color: green" class=" icon-ok "> Talebiniz Alınmıştır Mail İle Bilgilendirileceksiniz.</i>',
                        
                    ]);
                
                }else{


                    
                    $this->dispatchBrowserEvent('message', [
                        'text' => ' <i  style="color: green" class=" icon-ok "> Talebiniz Alınmıştır</i>',
                        
                    ]);
                
                }

                $deleteCart =   Cart::where('user_id', auth()->user()->id)->delete();
                if ($deleteCart) {

                    $this->emit('emitAddToCart');
                    return redirect()->route('index.thankyou')->with('message', 'Cash message');
                }
            } else {

                $this->dispatchBrowserEvent('message', [
                    'text' => ' <i  style="color:red " class=" icon-cancel "> Talebiniz Alınamadı</i>',

                ]);
            }
        } else {
            //
            return redirect()->route('index.checkout')->with('productNotSelling', 'Sepetinizdeki Ürünlerden Bazıları Geçersizdir İptal Edilen Ürünleriniz Sepetinizden Kaldırıldı Ve Favorilerinize Eklendi.');
        }
    }




    public function totalProductAmount()
    {
        $this->cart = Cart::where('user_id', auth()->user()->id)->get();

        if ($this->cart) {

            foreach ($this->cart as $this->cartItem) {

                $this->totalPrice += $this->cartItem->quantity * $this->cartItem->product->selling_price;
            }
            return $this->totalPrice;
        }
    }

    public function render()
    {

        $this->totalProductAmount();



        return view('livewire.app.checkout.index', [

            'totalPrice' => $this->totalPrice,
            'cart' => $this->cart,
            'data' => $this->validetedData,
        ]);
    }
}
