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
	<form method="post" action="{{route('posts.store')}}" enctype="multipart/form-data" >
		@csrf
		<div class="'form-control">
	<tr><th>Image:</th><th><input type="file" name="image"></th></tr></div>
	<div class="'form-control">
	<tr><th>Title:</th><th><input type="text" name="title"></th></tr></div>
	<div class="form-group">
	<tr><th>Chose Catagory Name:</th><th><select name="catagory" class="form-control" id="postcatagory">
		@if (count($catagories) !=0)
		<option selected>Please select your catagory</option>
        @foreach($catagories as $catagory)
        <option value="{{$catagory['id']}}">{{$catagory['catagory']}}</option>
        @endforeach
        @else
        <option>No catagory found</option>
        @endif
	</select></th></tr>
</div>
	
	<div class="'form-control">
	<tr><th>post Tags:</th><th><input type="text" name="tags"></th></tr></div>
	<div class="'form-control">
	<tr><th>post Content:</th><th><input type="text" name="content"></th></tr></div>
	<tr><th></th><th><input type="submit" ></th></tr>
	</form>
</table>

@endsection