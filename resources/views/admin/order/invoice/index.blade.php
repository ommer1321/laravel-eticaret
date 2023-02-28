<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>{{$order->user_detail->name}} - {{$order->tracking_no}}</title>

    <style>
        html,
        body {
            margin: 10px;
            padding: 10px;
            font-family: sans-serif;
        }
        h1,h2,h3,h4,h5,h6,p,span,label {
            font-family: sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0px !important;
        }
        table thead th {
            height: 28px;
            text-align: left;
            font-size: 16px;
            font-family: sans-serif;
        }
        table, th, td {
            border: 1px solid #ddd;
            padding: 8px;
            font-size: 14px;
        }

        .heading {
            font-size: 24px;
            margin-top: 12px;
            margin-bottom: 12px;
            font-family: sans-serif;
        }
        .small-heading {
            font-size: 18px;
            font-family: sans-serif;
        }
        .total-heading {
            font-size: 18px;
            font-weight: 700;
            font-family: sans-serif;
        }
        .order-details tbody tr td:nth-child(1) {
            width: 20%;
        }
        .order-details tbody tr td:nth-child(3) {
            width: 20%;
        }

        .text-start {
            text-align: left;
        }
        .text-end {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .company-data span {
            margin-bottom: 4px;
            display: inline-block;
            font-family: sans-serif;
            font-size: 14px;
            font-weight: 400;
        }
        .no-border {
            border: 1px solid #fff !important;
        }
        .bg-blue {
            background-color: #414ab1;
            color: #fff;
        }
    </style>
</head>
<body>

    <table class="order-details">
        <thead>
            <tr>
                <th width="50%" colspan="2">
                    <h2 class="text-start">As Yazılım</h2>
                </th>
                <th width="50%" colspan="2" class="text-end company-data">
                    <span>Fatura Id: # {{$order->id}}</span> <br>
                    <span>Tarih: {{$todayOrders}}</span> <br>
                    <span>Posta Kodu :  {{$order->pincode}}</span> <br>
                    <span>Adres:  {{$order->address}} </span> <br>
                </th>
            </tr>
            <tr class="bg-blue">
                <th width="50%" colspan="2">Siparis Detayi</th>
                <th width="50%" colspan="2">Müsteri Detayi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Siparis Id:</td>
                <td>{{$order->id}}</td>

                <td>Full Name:</td>
                <td>{{$order->user_detail->name}}</td>
            </tr>
            <tr>
                <td>Siparis Kodu:</td>
                <td>{{$order->tracking_no}}</td>

                <td>Email:</td>
                <td>{{$order->email}}</td>
            </tr>
            <tr>
                <td>Siparis Tarihi:</td>
                <td>{{$order->created_at}}</td>

                <td>Telefon:</td>
                <td>{{$order->phone}}</td>
            </tr>
            <tr>
                <td>Ödeme Türü:</td>
                <td>{{$order->payment_mode}}</td>

                <td>Adres:</td>
                <td>{{$order->address}}</td>
            </tr>
            <tr>
                <td>Sipariş Durumu:</td>
                <td>{{$order->status_message}}</td>

                <td>Pin code:</td>
                <td>{{$order->pincode}}</td>
            </tr>
        </tbody>
    </table>

    <table>
        <thead>
            <tr>
                <th class="no-border text-start heading" colspan="5">
                    Ürünler
                </th>
            </tr>
            <tr class="bg-blue">
              
                <td> <b>-</b>   </td>
                <td>Ürün Adi </td>
                <td>Fiyat</td>
                <td>Adet</td>
                <td>Toplam</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($order_products as $order_item )
         
            @php
                 $totalAmount += $order_item->price * $order_item->quantity;
            @endphp
           
            <tr>
           
                <td  width="10%" >{{$loop->iteration}}</td>

                <td>{{$order_item->product->name}}</td>
                <td  width="10%" >{{$order_item->price}} <small>$</small></td>

                <td  width="10%" >{{$order_item->quantity}} <small>adet</small></td>
               
                <td width="15%" class="fw-bold">{{$order_item->price * $order_item->quantity  }}$</td>
        


           
            </tr>
       
           
            @endforeach
        <tr>
                <td colspan="4" class="total-heading">Toplam Fiyat <small></small> :</td>
                <td colspan="1" class="total-heading">{{ $totalAmount }}$</td>
            </tr>

        </tbody>
    </table>

    <br>
    <p class="text-center">
       As Yazilim Copyright ©
    </p>

</body>
</html>

<video src="" id="v-2"></video>
