<!DOCTYPE html>
<html>
    <head>
        <title>{{ $pageTitle }}</title>
	</head>
    @include('layouts.topButtons')
	<hr>		
	<form action="{{ route('categoriesStore') }}" method="post">
		@csrf
		عنوان : 
		<input type = 'text' name = 'title'><br>
		توضیح :
		<textarea name = 'description'></textarea><br>
		وضعیت انتشار : 
		<select name name = 'active'>
			<option>0</option>
			<option>1</option>
		</select>
		<br>
		<a href="{{ route('categoriesCreate') }}">پاک کردن فیلد ها</a>
		<input type="submit" value="ثبت"></input>
	</form>
</body>
</html>