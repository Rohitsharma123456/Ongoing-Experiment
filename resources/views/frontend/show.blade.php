@extends('frontend.layoutbase')
@section('content')

<div class="card" style="min-height: 500px">
	 <img src="{{$post->image}}" class="card-img-top" alt="..." style="height: 200px">
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text">{{$post->content}}</p>
    <p class="card-text"><small class="text-muted">Written By {{$post->author->authorname}}</small></p>
  </div>
 
</div>

<div class="card" style="min-height: 200px;max-height: auto">
	
    <h5 class="card-title">Comments</h5>
    <div class="card-body">
    <form method="post" class="form_control" action="{{route('frontend.savecomments',$post->id)}}" id="comments">
    	 @csrf
   <div class="input-group mb-3">
    	
  <input type="text" class="form-control" name="comment" placeholder="Comment.." aria-label="Comments" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
   </div>
  </form>
  
 
  	
  	@foreach($post->comments as $comment)
  	@if ($variable = str_replace(' ', '', $comment->comment).$comment->id) @endif
  	<div class="card" id="result">
  	<div class="card-body" > {{$comment->comment}}
     <a class="btn btn-outline-secondary" data-bs-toggle="collapse" href="#{{$variable}}" style="float: right;">Reply</a>
  	</div> 
  	<div class="collapse" id="{{$variable}}">
  <div class="card card-body">
   <form method="post" class="form_control" action="{{route('frontend.savereply',[$comment->id,$post->id])}}" id="comments">
    	 @csrf
   <div class="input-group mb-3">
    	
  <input type="text" class="form-control" name="comment" placeholder="Comment.." aria-label="Comments" aria-describedby="button-addon2">
  <button class="btn btn-outline-secondary" type="submit" id="button-addon2">Submit</button>
   </div>
  </form>
  </div>
</div>
    </div></br>

  	@endforeach
 
</div>

  
 

<script>
$.ajaxSetup({
  headers: {
    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  }
});
// Attach a submit handler to the form
$( "#comments" ).submit(function( event ) {
 
  // Stop form from submitting normally
  event.preventDefault();
 
  // Get some values from elements on the page:
  var $form = $( this ),
    term = $form.find( "input[name='comment']" ).val(),
    url = $form.attr( "action" );
 
  // Send the data using post
  var posting = $.post( url, { comment: term } );
 
  // Put the results in a div
  posting.done(function( data ) {
    
    $( "#result" ).append( data ).append('<br/>');
  });

 
});


</script>
 
</body>
</html>

@endsection
