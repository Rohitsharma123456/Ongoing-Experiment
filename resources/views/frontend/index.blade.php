
@extends('frontend.layoutbase')
@section('content')

<div class="container">
<table class="table">
    
    

	@if($posts->isNotEmpty())

	@foreach($posts as $post)
	<div class="card" style="min-height: 200px">
	 <img src="{{$post->image}}" style="height:150px;width: 100px" /></tr></br>
  <div class="card-body">
    <h5 class="card-title">{{$post->title}}</h5>
    <p class="card-text"> {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 50) }}
            @if (strlen(strip_tags($post->content)) > 50)
              ... <a href="{{ route('frontend.show', $post->id) }}" class="btn btn-info btn-sm">Read More</a>
            @endif</p>
    <p class="card-text"><small class="text-muted">Written By {{$post->author->authorname}}</small></p>
  </div>
 
</div>
	
	@endforeach

	@else

	<tr><th>No posts found</th></tr>
	@endif

</tbody>
</table>
{{ $posts->links() }}
</div>

@endsection
