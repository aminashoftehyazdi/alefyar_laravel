<!DOCTYPE html>
<html>
    <head>
        <title>@if(isset($pageTitle)) {{ $pageTitle }} @endif</title>
	</head>
	<body>
		<a href="{{ route('categories')}} ">لیست دسته بندی ها</a>
		<a href="{{ route('categoryCreate') }} ">دسته بندی جدید</a>
		<a href="{{ route('register')}} ">فرم ثبت نام</a>
		<a href="{{ route('login')}} ">فرم ورود</a>
		<form action="{{ route('logout') }}" method="POST">
			@csrf
			<button type="submit">خروج
			</button>
		</form>		