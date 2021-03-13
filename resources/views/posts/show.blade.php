@extends('posts.layoutbase')
@section('content')
<div>
	@if(!empty($errors))
	@foreach($errors as $error)
	<h3>{{$error}}</h3>
	@endforeach
	@endif
</div>
<div class="container">
<table class="table">
    <thead>

    	 <tr>
        <th>Post Image</th>
        <th>Post Title</th>
        <th>Product Content</th>


      </tr>
    </thead>
    <tbody>


	<tr>
	@isset($post)
	<th><img src="{{$post->image}}" style="height:100px;width: 200px" /></th>

	<th>{{$post->title}}</th>
	<th>{{$post->content}}</th>
	@endisset
	</tr><br>

</tbody>
</table></div>
@endsection
