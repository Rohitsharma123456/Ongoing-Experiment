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
        <th>Image</th>
        <th>Title</th>
        <th>Content</th>
        <th>Actions</th>
        <th></th>
      </tr>
    </thead>
    <tbody>

	@if(count($posts)!=0)

	@foreach($posts as $post)
	<tr>
	<th><img src="{{$post['image']}}" style="height:150px;width: 100px" /></th>

	<th>{{$post['title']}}</th>
	<th>{{$post['content']}}</th>
	<th>
	 <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Actions
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li><a href="{{route('posts.edit',$post['id'])}}" class=" btn btn-info btn-sm" role="button">Edit</a>
   <a href="{{route('posts.show',$post['id'])}}" class=" btn btn-success btn-sm" role="button">View</a>
   <a href="{{ route('posts.Delete',$post['id']) }}" class=" btn btn-danger btn-sm" role="button">Delete</a></li>
  </ul>
</div>
	
	
	
	</th></tr>
	@endforeach

	@else

	<tr><th>No posts found</th></tr>
	@endif

</tbody>
</table>
{{ $posts->links() }}
</div>

@endsection
