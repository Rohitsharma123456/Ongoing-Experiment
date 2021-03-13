<!DOCTYPE html>
<html>
<head>
  
<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>B</title>
	<style type="text/css">
		.header{width: auto;height:100px;}
		.footer{width: auto;height:100px;}
		.content{width: auto;min-height: 500px}
    .button{width:30px;height: 15px}
	</style>
<!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
</head>
<body>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<div class="header">
  
	<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand/logo -->
  <a class="navbar-brand" href="{{route('frontend.index')}}">BWise</a>

  <!-- Links -->
 <!--  <ul class="navbar-nav">
    <li class="nav-item">
     <div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    Posts
  </button>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
    <li> <a class="dropdown-item" href="{{route('posts.create')}}">Add New Post</a></li>
    <li><a class="dropdown-item" href="{{route('addcatagory')}}">Add Catagory</a></li>
    <li><a class="dropdown-item" href="{{route('addsubcatagory')}}">Add Subcatagory</a></li>
  </ul>
</div>
    </li>
    

  </ul> -->
</nav>

</div>
<div class="content">
@section('content')
@show
</div>
<div class="footer">
  <div class="card">
  <div class="card-header">
    What does Matter!
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p>Let it be.</p>
      <footer class="blockquote-footer">Rohit <cite title="Source Title">in Physica</cite></footer>
    </blockquote>
  </div>
</div>
	
</div>
</body>
</html>
