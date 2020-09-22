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
		public function create(){
			$pageTitle = 'ساخت دسته بندی جدید';
			return view('categoryCreate',compact('pageTitle'));
		}
		public function store(Request $request){
			$category = new Category();
			$msgs = [
			'required'=>'لازم است داداش',
			'max'=>'زیاده اخوی'
			];
			$request->validate([
			'title' => 'required|max:100',
			'description' => 'required'
			],$msgs);
			try{
				$category->create($request->all());
			}
			catch(Exception $excption){
				switch($excption->getCode()){
					case '23000' : $msg = 'فیلد تکراری است';
					break;
					case '8000' : $msg = 'نه خبر';
					break;
					default : $msg = 'چه شده';
				}
				return redirect(route('categories'))->with('fail','عملیات درست انجام نشد :' . $msg);
			}
			return redirect(route('categories'))->with('success','اضافه کردن دسته بندی جدید انجام شد');
		}
		public function show(Category $category){
			$pageTitle = 'نمایش جزئیات دسته بندی';
			return view('categoryShow',compact('pageTitle','category'));
		}
		public function edit(Category $category){
			$pageTitle = 'ویرایش دسته بندی';
			return view('categoryEdit',compact('pageTitle','category'));
		}
		// update the edited category
		public function update(Category $category,Request $request){
			$msgs = [
			'required'=>'لازم است داداش',
			'max'=>'زیاده اخوی'
			];
			$request->validate([
			'title' => 'required|max:100',
			'description' => 'required'
			],$msgs);
			try{
				$category->update($request->all());
			}
			catch(Exception $excption){
				switch($excption->getCode()){
					case '23000' : $msg = 'فیلد تکراری است';
					break;
					case '8000' : $msg = 'نه خبر';
					break;
					default : $msg = 'چه شده';
				}
				return redirect(route('categories'))->with('fail','عملیات درست انجام نشد :' . $msg);
			}
			return redirect(route('categories'))->with('success','ویرایش دسته بندی با موفقیت انجام شد');
		}
		public function destroy(Category $category){
			$category->delete();
			return redirect(route('categories'))->with('success','آیتم مورد نظر حذف گردید');
		}
	}																																																			