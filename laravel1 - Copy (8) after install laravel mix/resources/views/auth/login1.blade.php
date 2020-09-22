@include('layouts.header')
@include('layouts.messages')
<style>
	.is-invalid {
	border-color:red;
	}
</style>
<form action = "{{ route('login') }}" method="POST">
	@csrf
	ایمیل : <input type = 'email' name = 'email' value="{{old('email') }}">
	<br>
	رمز : <input type = 'password' name = 'password'>
	<br>
	مرا به خاطر بسپار<input type = 'checkbox' name = 'remember'>
	<br>
	<input type = 'submit' value='ورود'>
</form>