@include('layouts.header')
@include('layouts.messages')
<style>
	.is-invalid {
	border-color:red;
	}
</style>
<form action="{{ route('categoryStore') }}" method="POST">
	@csrf
	عنوان :
	<input name='title' class="@error('title') is-invalid @enderror">
	<br>
	@error('title')
	{{ $message }}
	<br>
	@enderror 
	شرح :
	<textarea name='description'></textarea>
	<br>
	@error('description')
	{{ $message }}
	<br>
	@enderror
	وضعیت :
	<select name='active'>
		<option value=0>عدم انتشار</option>
		<option value=1>منتشر شود</option>
	</select>
	<br>
	<input type='submit' value='ثبت'>
</form>