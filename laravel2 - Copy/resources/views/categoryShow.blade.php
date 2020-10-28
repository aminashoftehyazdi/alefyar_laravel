@include('layouts.header')
@include('layouts.messages')
عنوان : {{ $category->title }}
<br>
شرح : {{ $category->description}}
<br>
وضعیت : {{ $category->active }}
<br>
@include('layouts.footer')