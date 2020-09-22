@if(session('success'))
<div>
	{{ session('success') }}
</div>
@endif
@if($errors->any())
@foreach($errors->all() as $error)
<div>
	{{ $error }}
</div>
@endforeach
@endif
@if(session('fail'))
<div>
	{{ session('fail') }}
</div>
@endif