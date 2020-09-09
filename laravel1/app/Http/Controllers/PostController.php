<?php
	namespace App\Http\Controllers;
	use Illuminate\Support\Facades\DB;
	use Illuminate\Http\Request;
	class PostController extends Controller
	{
		public function index(){
			$posts = DB::table('posts')->get();
			$pageTitle = 'لیست پست های ما';
			return view('posts',compact('posts','pageTitle'));
			}
	}		