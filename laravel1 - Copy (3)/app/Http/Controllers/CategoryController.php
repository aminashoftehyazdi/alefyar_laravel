<?php
	namespace App\Http\Controllers;
	use App\Category;
	use Illuminate\Http\Request;
	use Exception;
	class CategoryController extends Controller
	{
		public function index()
		{
			$pageTitle = 'لیست دسته بندی ها';
			$categories = Category::get();
			return view('categories',compact('categories','pageTitle'));
		}
		
		public function show(Category $category)
		{
			$pageTitle = 'نمایش دسته بندی انتخاب شده';
			
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