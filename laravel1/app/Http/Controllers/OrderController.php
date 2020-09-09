<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use App\Order;
	class OrderController extends Controller
	{
		public function index(){
			$pageTitle = 'لیست سفارشات';
			$orders = Order::orderBy('id','DESC')->get();
			return view('orders',compact('orders','pageTitle'));
		}
	}