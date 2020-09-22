

	@foreach($categories as $category)
	<a> {{ $category -> id }} <a>
	<a href="{{ route ('categoriesShow',$category->id) }}"> {{ $category -> title }} </a>
	<br>
	<a href="#">حذف</a>
	<a href="#">ویرایش</a>
	<hr>
	@endforeach
