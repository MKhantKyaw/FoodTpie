<?php

namespace App\Http\Controllers;

use App\Promo;
use App\Order;
use App\Product;
use Illuminate\Http\Request;

class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('pages.orders',compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.orderCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = Order::create(request(['customer_name','phone_num','remark','order_date','order_location','total_price','status']));
        $oid = $order->id;
        $quants = json_decode(request('quantities'));
        $pids = json_decode(request('products'));
        $promo = request('promo_info');
        $tmp = array();
        for ($i=0; $i < count($pids); $i++) { 
            $products = Product::where('id',$pids[$i])->get();
            $product = $products[0];
            $price = $product->price;
            $ord = array(
                'order_id' => $oid,
                'product_id' => $product->id,
                'quantity' => $quants[$i],
                'price' => $price*$quants[$i]
            );
            $order->addOrderDetail($ord);
        }
        if($promo){
            $promoRec = Promo::where('id',$promo)->get();
            $promoRec[0]->delete();
        }
        return redirect('/menu');
    }
    
    public function order(){
        $uid = auth()->id();
        $packages = Promo::where('uid',auth()->id())->get();
        $request = (object) [
            'pids' => json_decode(request('pids')),
            'quantities' => json_decode(request('quantities')),
            'totalPrice' => json_decode(request('totalPrice')),
        ];
        $products = array();
        for ($i=0; $i < count($request->pids) ; $i++) { 
            array_push($products, Product::where('id',$request->pids[$i])->get());
        }
        $prodCnt = count($request->pids);
        $products = (object) $products;
        $data = (object) [
            'quantities' => $request->quantities,
        ];
        $totalPrice = $request->totalPrice;
        return view('pages.fillOrder',compact('data','products','prodCnt','uid','packages','totalPrice'));
    }

    function storePromo(){
        $uid = auth()->id();
        $promo = array(
            'uid' => $uid,
            'discount' => request('discount')
        );
        Promo::create($promo);
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('pages.orderShow',compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
