@include('layouts.header')
@include('layouts.messages')
@foreach($categories as $category)
<a> {{ $category -> id }} <a>
	<a href="{{ route('categoryShow',$category->id) }}"> {{ $category -> title }} </a>
	<br>
	<a href="#">حذف</a>
	<a href="{{ route('categoryEdit',$category->id) }}">ویرایش</a>
	<hr>
	@endforeach
@include('layouts.footer')