<?php
	namespace App\Http\Controllers;
	use App\Category;
	use Illuminate\Http\Request;
	class CategoryController extends Controller
	{
		
		public function index()
		{
			$pageTitle = 'لیست دسته بندی ها';
			$categories = Category::get();
			return view('categories',compact('categories','pageTitle'));
		}
		
		public function create()
		{
			$pageTitle = 'ایجاد دسته بندی جدید';
			return view('categoriesCreate',compact('pageTitle'));
		}
		
		
		// store create form values in database by Category Model
		public function store(Request $request)
		{
			dd($request);
		}
		
		public function show(Category $category)
		{
			//
		}
		
		public function edit(Category $category)
		{
			//
		}
		
		public function update(Request $request, Category $category)
		{
			//
		}
		
		public function destroy(Category $category)
		{
			//
		}
	}	