<?php
	namespace App\Http\Controllers;
	use Illuminate\Http\Request;
	use Illuminate\Support\Facades\DB;
	use App\Category;
	use Exception;
	class CategoryController extends Controller
	{
		/**
			* Display a listing of the resource.
			*
			* @return \Illuminate\Http\Response
		*/
		public function index()
		{
			$pageTitle = 'لیست دسته بندی ها';
			$categories = Category::all();
			return view('categories', compact('pageTitle', 'categories'));
		}
		/**
			* Show the form for creating a new resource.
			*
			* @return \Illuminate\Http\Response
		*/
		public function create()
		{
			$pageTitle = 'ساخت دسته بندی جدید';
			return view('categoriesCreate',compact('pageTitle'));
		}
		/**
			* Store a newly created resource in storage.
			*
			* @param  \Illuminate\Http\Request  $request
			* @return \Illuminate\Http\Response
		*/
		public function store(Request $request)
		{
			try {
				$messages = ['title.required'=>'فیلد الزامی است', 'description.max'=>'حداکثر 3 کاراکتر'];
				$request->validate(['title'=>'required|max:10', 'description'=>'max:3'], $messages);
				$category = new Category;
				$category->create($request -> all());
				return redirect(route('cateS'))->with('success','ایجاد رکورد به درستی انجام شد');
			}
			catch (Exception $e) {
				switch($e->getCode()){
					case 2002 : $warn = 'ارتباط با سرور قطع گردیده است';
					break;
					case 23000 : $warn = 'ورودی معتبر نمی باشد';
					break;
					default : $warn = 'خطای غیر منتظره';					
				}
				return redirect(route('catCreate'))->with('warning',$warn);
			}
		}
		public function show(Category $category)
		{
			$category = Category::find($category->id);
			$pageTitle = 'نمایش جزئیات دسته بندی';
			return view('categoriesShow', compact('pageTitle', 'category'));
		}
		/**
			* Show the form for editing the specified resource.
			*
			* @param  \App\Category  $category
			* @return \Illuminate\Http\Response
		*/
		public function edit(Category $category)
		{
			$pageTitle = 'ویرایش دسته بندی';
			return view('categoriesEdit',compact('pageTitle', 'category'));
		}
		/**
			* Update the specified resource in storage.
			*
			* @param  \Illuminate\Http\Request  $request
			* @param  \App\Category  $category
			* @return \Illuminate\Http\Response
		*/
		public function update(Request $request, Category $category)
		{
			//$category->update($request->all());
			//$category->title = $request->title;
			//$category->description = $request->description;
			print_r($category);
			//$category->save();
			//return redirect(route('cateS'))->with('success','تغییرات انجام گردید');
		}
		/**
			* Remove the specified resource from storage.
			*
			* @param  \App\Category  $category
			* @return \Illuminate\Http\Response
		*/
		public function destroy(Category $category)
		{
			$category->delete();
			return redirect(route('cateS'))->with('success','حذف دسته بندی با موفقیت انجام گردید');
		}
	}																		