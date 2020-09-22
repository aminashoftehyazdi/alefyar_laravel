@include('layouts.header')
@include('layouts.messages')
<style>
	.is-invalid {
	border-color:red;
	}
</style>
<form action="{{ route('categoryUpdate',$category->id) }}" method="POST">
	@method('put')
	@csrf
	عنوان :
	<input name='title' class="@error('title') is-invalid @enderror" value="{{ $category->title }}">
	<br>	
	شرح :
	<textarea name='description' class="@error('description') is-invalid @enderror">{{ $category->description }}</textarea>
	<br>
	وضعیت :
	<select name='active'>
		<option value=0 "@if($category->active == 0) selected @endif">عدم انتشار</option>
		<option value=1 "@if($category->active == 1) selected @endif)">منتشر شود</option>
	</select>
	<br>
	<input type="submit" value="ذخیره">
</form>