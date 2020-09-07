<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	class indexController extends Controller
	{
		public function welcome(){			
			return view('welcome');
		}
		public function avvali(){
			return view('firsti');
		}
		public function index(){			
			return 'injaa index ast';
		}
		public function harchi(){
			$someResult = rand(1,1000);
			return 'injaa harchi ast : ' . $someResult;
		}
	}					