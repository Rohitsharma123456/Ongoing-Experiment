@extends('posts.layoutbase')
@section('content')
@if (count($errors) > 0)
   <div class = "alert alert-danger">
      <ul>
         @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
         @endforeach
      </ul>
   </div>
@endif
<table class="table">
	<form method="post" action="{{route('post.storecatagory')}}" enctype="multipart/form-data" class="form">
	@csrf
	<div class="form-control">
	<tr><th>Product Catagory Image:</th><th><input type="file" name="image"></th></tr>
	
	<tr><th>Product Catagory Name:</th><th><input type="text" name="catagory"></th></tr>

	<tr><th></th><th><input type="submit" ></th></tr></div>
	</form>
</table>
@endsection