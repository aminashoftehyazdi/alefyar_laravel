<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
		<title>
			{{-- $pageTitle --}}
		</title>
	</head>
    <body>
		
		Players statistic : <hr>
		{{-- @foreach($players as $player) 
		name : {{ $player -> fname $player -> lname}} ,
		sum of score is : {{ $player -> score }} ,
		in : {{ $player -> competitionsCount }} game		
		<hr>		
		$foreachend
		Most score get with : 
		name : {{ $maxScorePlayerName }}
		score : {{ $maxScore }}
		Most average score get with :
		name : {{ $maxScoreAVGPlayerName }}
		in : {{ $maxScoreAVGPlayerCC }} game
		AVG : {{ $maxScoreAVGPlayerScore }} point
		--}}
		
	</body>
</html>