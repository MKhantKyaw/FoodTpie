<?php

namespace App\Http\Controllers;

use App\Promo;
use Illuminate\Http\Request;
use App\Order;
use App\User;
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
        $promos = Promo::where('uid',auth()->id())->get();
        return view('user.promotion',compact('promos'));
    }

    public function storePromo(){
        Promo::create([
            'uid' => auth()->id(),
            'discount' => request('promo'),
            'recentDraw' => request('recentDraw')
        ]);
        return redirect('/userDashboard');
    }

    public function profile()
    {
        $users = User::where('id',auth()->id())->get();
        return view('user.profile',compact('users'));
    }

    public function update($id)
    {

        // $users->update(request(['name','email','phone_num','address']));
        $users = User::findOrFail($id);
        $users->name = request('name');
        $users->email = request('email');
        $users->phone_num = request('phone_num');
        $users->address = request('address');
        $users->save();
        return redirect('/userDashboard');
    }
}
