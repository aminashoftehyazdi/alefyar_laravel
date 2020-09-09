<!DOCTYPE html>
<html>
	<head>
		<title>
			{{ $pageTitle }}
		</title>
	</head>
	<body>
		<?php
			print_r($posts);
			echo "<hr>";
		?>
		@foreach ($posts as $post)
		شناسه : {{ $post->id }} <br>
		عنوان : {{ $post->title }} <br>
		<hr>
		@endforeach
		{{ $posts->links() }}
	</body>
</html>