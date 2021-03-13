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
	<form method="post" action="{{route('posts.update',$post['id'])}}" enctype="multipart/form-data" >
		@csrf
        <input type="hidden" name="_method" value="PUT">
		<div class="'form-control">
	<tr><th>post Image:</th><th><input type="file" name="image"></th></tr></div>
	<div class="'form-control">
	<tr><th>post Name:</th><th><input type="text" name="title" value="{{$post['title']}}"></th></tr></div>
	<div class="form-group">
	<tr><th>Chose Catagory Name:</th><th><select name="catagory" class="form-control">
		@if (count($catagories) !=0)
	
        @foreach($catagories as $catagory)
        <option value="{{$catagory['id']}}">{{$catagory['catagory']}}</option>
        @endforeach
        @else
        <option>No catagory found</option>
        @endif
	</select></th></tr>
</div>
	
	<div class="'form-control">
	<tr><th>Tags:</th><th><input type="text" name="tags" value="{{$post['tags']}}"></th></tr></div>
	<div class="'form-control">
	<tr><th>Content:</th><th><input type="text" name="content" value="{{$post['content']}}"></th></tr></div>
	<tr><th></th><th><input type="submit" ></th></tr>
	</form>
</table>
@endsection