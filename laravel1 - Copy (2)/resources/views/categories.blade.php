<!DOCTYPE html>
<html>
    <head>
        <title>{{ $pageTitle }}</title>
	</head>
    @include('layouts.topButtons')
	<hr>		
	@foreach($categories as $category)
	{{ $category -> id }} 
	{{ $category -> title }} 
	<br>
	<a href="#">حذف</a>
	<a href="#">ویرایش</a>
	<hr>
	@endforeach
</body>
</html>