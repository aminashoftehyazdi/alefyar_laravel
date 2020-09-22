@include('layouts.messages')
<style>
	.is-invalid {
	border-color:red;
	}
</style>
<form action = "{{ route('register') }}" method="POST">
	@csrf
	نام کاربری : <input name = 'name' value="{{ old('name') }}">
	<br>
	ایمیل : <input type = 'email' name = 'email' value="{{old('email') }}">
	<br>
	رمز : <input type = 'password' name = 'password'>
	<br>
	تکرار رمز ورود : <input type = 'password'name = 'password_confirmation'>
	<br>
	<input type = 'submit' value='ثبت نام'>
</form>