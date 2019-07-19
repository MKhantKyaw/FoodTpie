<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Order;
use Illuminate\Support\Facades\DB;
class AdminPanelController extends Controller
{

	public function __construct()
	{
		$this->middleware('auth:admin');
	}
	
	public function showUsertable()
	{
		$users = User::all();
		$counts = DB::table('users')->count();
		return view('admin.tables', compact('counts','users'));
	}


	public function showAdminOrder()
	{
		$orders = DB::table('orders')->get();
		$products = DB::table('order_details')
						->leftjoin('products','order_details.product_id','=','products.id')
						->get();
		return view('admin.orders',compact('orders','products'));
	}
	// 
	// public function showProduct()
	// {
	// 	return view('admin.products');
	// }
}
