<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>FoodTPie Invoice</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <style type="text/css">
              .clearfix:after {
              content: "";
              display: table;
              clear: both;
            }

            a {
              color: #5D6975;
              text-decoration: underline;
            }

            body {
              position: relative;
              width: 21cm;  
              height: 29.7cm; 
              margin: 0 auto; 
              color: #001028;
              background: #FFFFFF; 
              font-family: Arial, sans-serif; 
              font-size: 12px; 
              font-family: Arial;
            }

            header {
              padding: 10px 0;
              margin-bottom: 30px;
            }

            #logo {
              text-align: center;
              margin-bottom: 10px;
            }

            #logo img {
              width: 90px;
            }

            h1 {
              border-top: 1px solid  #5D6975;
              border-bottom: 1px solid  #5D6975;
              color: #5D6975;
              font-size: 2.4em;
              line-height: 1.4em;
              font-weight: normal;
              text-align: center;
              margin: 0 0 20px 0;
              background: url(dimension.png);
            }

            #project {
              float: left;
            }

            #project span {
              color: #5D6975;
              text-align: right;
              width: 52px;
              margin-right: 10px;
              display: inline-block;
              font-size: 0.8em;
            }

            #company {
              float: right;
              text-align: right;
            }

            #project div,
            #company div {
              white-space: nowrap;        
            }

            table {
              width: 100%;
              border-collapse: collapse;
              border-spacing: 0;
              margin-bottom: 20px;
            }

            table tr:nth-child(2n-1) td {
              background: #F5F5F5;
            }

            table th,
            table td {
              text-align: center;
            }

            table th {
              padding: 5px 20px;
              color: #5D6975;
              border-bottom: 1px solid #C1CED9;
              white-space: nowrap;        
              font-weight: normal;
            }

            table .service,
            table .desc {
              text-align: center;
            }

            table td {
              padding: 20px;
              text-align: right;
            }

            table td.service,
            table td.desc {
              vertical-align: top;
            }

            table td.unit,
            table td.qty,
            table td.total {
              font-size: 1.2em;
            }

            table td.grand {
              border-top: 1px solid #5D6975;;
            }

            #notices .notice {
              color: #5D6975;
              font-size: 1.2em;
            }

            footer {
              color: #5D6975;
              width: 100%;
              height: 30px;
              position: absolute;
              bottom: 0;
              border-top: 1px solid #C1CED9;
              padding: 8px 0;
              text-align: center;
            }
    </style>
  </head>
  <body>
    <header class="clearfix">
      <div id="logo">
        <img src="/images/FoodTPie_logo2.png">
      </div>
      <h1>INVOICE</h1>
      <div id="company" class="clearfix">
        <div>FoodTPie</div>
        <div>Parami Road,<br /> Universities' Hlaing Campus <br/>Ward 12, Hlaing Township,<br/>Yangon, Myanmar</div>
        <div>+95 976 641 100 19</div>
        <div><a>getfood@foodtpie.com</a></div>
      </div>
      <div id="project">
        <div><span>CUSTOMER</span>{{$orders[0]->customer_name}}</div>
        <div><span>ADDRESS</span>{{$orders[0]->order_location}}</div>
        <div><span>PHONE</span>{{$orders[0]->phone_num}}</div>
        <div><span>DATE</span>{{$orders[0]->order_date}}</div>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th class="desc">DESCRPTION</th>
            <th class="unit">PRICE</th>
            <th class="qty">QTY</th>
            <th class="total">TOTAL</th>
          </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
          <tr>
            <td class="desc">{{ $order -> product_name }}</td>
            <td class="desc">{{ $order -> price }}</td>
            <td class="desc">{{ $order -> quantity}}</td>
            <td class="desc">{{ $order -> price * $order -> quantity }}</td>
          </tr>
        @endforeach
          <tr>
            <td> </td>
            <td> </td>
            <td>TAX 5%</td>

            <?php 
            $tax = 0;
            foreach ($orders as $order) {
               $tax += $order -> price * $order->quantity * 0.05 ;
            }
            ?>
            <td class="desc"><?php echo "$tax";?></td>
          </tr>
          <tr>
            <td> </td>
            <td> </td>
            <td class="desc">GRAND TOTAL</td>
            <td class="desc">{{ $orders[0] -> total_price }}</td>
          </tr>
        </tbody>
      </table>
      </div>
    </main>
  </body>
</html>
