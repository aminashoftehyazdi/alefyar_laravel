<!DOCTYPE html>
<html>
	<head>
		<title>
			{{ $pageTitle }}
		</title>
	</head>
	<body>		
		@foreach ($orders as $order)
		شناسه : {{ $order->id }} <br>
		عنوان : {{ $order->title }} <br>
		<hr>
		@endforeach
		
	</body>
</html>