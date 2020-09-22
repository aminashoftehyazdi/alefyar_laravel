<!DOCTYPE html>
<html>
    <head>
        <title>{{ $pageTitle }}</title>
	</head>
    @include('layouts.topButtons')
	<hr>	

	عنوان : {{ $category->title }} <br>
	توضیحات : {{ $category->description }} <br> 
	ایجاد شده در تاریخ : {{ $category-> created_at }} <br>
	آخرین بروزرسانی : {{ $category-> updated_at }} 

	<hr>
</body>
</html>