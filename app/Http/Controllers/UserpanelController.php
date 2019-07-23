<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;
use App\Order;
use App\Product;
use DB;

class UserpanelController extends Controller
{
    public function index(){
        $orders = DB::table('orders')->where('uid',auth()->id())->get();
        $products = DB::table('orders')
                        ->leftjoin('order_details','orders.id','=','order_details.order_id')
                        ->leftjoin('products','order_details.product_id','=','products.id')
                        ->where('uid',auth()->id())
                        ->get();
        return view('user.index',compact('orders','products'));
    } 

    public function cancelOrder($order_id, $order_date, $order_time)
    {

        DB::table('orders')->where('id',$order_id)->delete();
        return redirect('/userDashboard');
    }

    public function promotion(){
        return view('user.promotion');
    }

    public function storePromo(){
        Promo::create([
            'uid' => auth()->id(),
            'discount' => request('promo')
        ]);
        return redirect('/userDashboard');
    }
}
