<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	class indexController extends Controller
	{
		public function index(){
			$wordA = 'متن آزمایشی';
			$wordB = 'نوشته امتحانی';
			return view('index')->with('someText1',$wordA)->with('someText2',$wordB);
		}
		public function welcome(){
			return view('welcome');
		}
		
		public function article($id) {
			return view('article',compact('id'));
		}
	}				