@include('layouts.header')
@include('layouts.messages')
<form action="{{ route('login') }}" method="POST">
	@csrf
	ایمیل : <input type="email" name="email">
	<br>
	رمز : <input type="password" name="password"> 
	<br>
	مرا به خاطر بسپار : <input type="checkbox" >
	<input type="submit" value="ورود">
</form>
@include('layouts.footer')