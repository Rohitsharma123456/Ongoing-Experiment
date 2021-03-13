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
	<form method="post" action="{{route('post.storesubcatagory')}}" enctype="multipart/form-data">
	@csrf
	<div class="form-group">
	<tr><th>Chose Catagory Name:</th><th><select name="catagory" class="form-control">
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
<div class="form-group">
	<tr><th>Product Subcatagory Image:</th><th><input type="file" name="image" class="form-control"></th></tr></div>
	<div class="form-group">
	<tr><th>Product subcatagory Name:</th><th><input type="text" name="subcatagory" class="form-control"></th></tr>
</div>
	<tr><th></th><th><input type="submit" ></th></tr>
	</form>
</table>
<script type="text/javascript">
	$.ajax()


</script>
@endsection