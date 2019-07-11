<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
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

	public function showOrder()
	{
		return view('admin.orders');
	}
}
